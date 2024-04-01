<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Purchase;
use Stripe\StripeClient;
use App\Mail\OrderPending;
use Livewire\Attributes\Layout;
use App\Models\Map as SingleMap;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class Map extends Component
{
    public $map, $email;

    public function rules() 
    {
        return [
            'email' => 'required|email|max:255'
        ];
    }
    
    #[Layout('layouts.base')] 
    public function render()
    {
        return view('livewire.map');
    }

    public function mount(SingleMap $map){

        if($this->map->is_active == 1){
            $this->map = $map;
            SEOMeta::setTitle($this->map->name);
            SEOMeta::setDescription($this->map->description);
            SEOMeta::setCanonical(config('app.url').'/map/'.$this->map->slug);
            SEOMeta::addMeta('article:published_time', $this->map->created_at->toW3CString(), 'property');
            SEOMeta::addMeta('article:updated_time', $this->map->updated_at->toW3CString(), 'property');
            SEOMeta::addMeta('map:price:amount', $this->map->price, 'property');
            SEOMeta::addMeta('map:price:currency', 'USD', 'property');

            OpenGraph::setDescription($this->map->description);
            OpenGraph::setTitle($this->map->name);
            OpenGraph::setUrl(config('app.url').'/map/'.$this->map->slug);
            OpenGraph::addProperty('type', 'map');
            OpenGraph::addProperty('map:price:amount', $this->map->price);
            OpenGraph::addProperty('map:price:currency', 'USD');

            TwitterCard::setTitle($this->map->name);
            TwitterCard::setSite('@buyrustmaps');

            JsonLd::setTitle($this->map->name);
            JsonLd::setDescription($this->map->description);
            JsonLd::addImage(config('app.url').$this->map->image);
        }else{
            abort(404);
        }
    }

    public function randomCheckOutGenerator() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 120; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    public function buynow(){
        $this->validate();
        $this->purchase();
    }

    private function purchase(){
        $checkout_id = $this->randomCheckOutGenerator();
        $stripe = new StripeClient(config('app.stripe'));
        $checkout = $stripe->checkout->sessions->create([
            'success_url' => config('app.url')."/status/success/".$checkout_id,
            'cancel_url' => config('app.url')."/status/cancel/".$checkout_id,
            'currency' => "USD",
            'expires_at' => Carbon::now()->addHours(24)->timestamp,
            'line_items' => [
                [ 
                    'price_data' => [
                    "product" => $this->map->stripe,
                    "currency" => 'USD',
                    "unit_amount" =>  $this->map->price * 100,
                ], 
                    'quantity' => 1 
                ],
            ],
            'mode' => 'payment',
        ]);
        Purchase::create([
            'email' => $this->email,
            'price' => $this->map->price,
            'downloads' => 0,
            'map_id' => $this->map->id,
            'checkout_url' => $checkout['url'],
            'checkout_id' => $checkout_id
        ]);
        Mail::to($this->email)->send(new OrderPending($checkout['url']));
        return redirect($checkout['url']);
    }
}