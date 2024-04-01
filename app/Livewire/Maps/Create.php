<?php

namespace App\Livewire\Maps;

use App\Models\Map;
use Livewire\Component;
use Stripe\StripeClient;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name, $price, $size, $image, $file, $description, $body;

    public function rules() 
    {
        return [
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'size' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp',
            'file' => 'required|file|max:100000|mimes:zip',
            'description' => 'required|max:255',
            'body' => 'required'
        ];
    }

    public function render()
    {
        return view('livewire.maps.create');
    }

    public function createMap(){
        $this->validate();
        $slug = str_replace(' ','-', strtolower($this->name)).'-'.rand(99, 9999999);
        $image = '/storage/'.$this->image->storeAs('images',  $slug.'.'.$this->image->getClientOriginalExtension(), 'public_disk');
        $stripe = new StripeClient(config('app.stripe'));
        $product = $stripe->products->create([
            'name' => $this->name,
            'images' => [
                config('app.url').'/storage/'.$image
            ]
        ]);
        Map::create([
            'name' => $this->name,
            'slug' => $slug,
            'stripe' => $product['id'],
            'price' => number_format($this->price, 2),
            'size' => $this->size,
            'image' => $image,
            'file' => $this->file->store('maps'),
            'original' => $this->file->getClientOriginalName(),
            'body' => $this->body,
            'description' => $this->description
        ]);
        session()->flash('success', 'Map has been created!');
    }
}