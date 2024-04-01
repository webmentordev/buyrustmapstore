<?php

namespace App\Livewire\Maps;

use App\Models\Map;
use Livewire\Component;
use Stripe\StripeClient;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{

    use WithFileUploads;

    public $name, $slug, $price, $size, $image, $file, $description, $body, $map;

    public function rules() 
    {
        return [
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'price' => 'required|numeric',
            'size' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp',
            'file' => 'nullable|file|max:100000|mimes:zip',
            'description' => 'required|max:255',
            'body' => 'required'
        ];
    }

    public function render()
    {
        return view('livewire.maps.update');
    }

    public function mount(Map $map){
        $this->map = $map;
        $this->name = $map->name;
        $this->slug = $map->slug;
        $this->price = $map->price;
        $this->description = $map->description;
        $this->body = $map->body;
        $this->size = $map->size;
    }

    public function mapUpdate(){
        $this->validate();
        $image = null;
        $file = null;
        $original = null;
        
        $stripe = new StripeClient(config('app.stripe'));
        $slug = str_replace(' ', '-', $this->slug);
        if($this->image){
            $image = '/storage/'.$this->image->storeAs('images',  $slug.'.'.$this->image->getClientOriginalExtension(), 'public_disk');
            $stripe->products->update(
                $this->map->stripe,
                [
                    'images' => [
                        config('app.url').$image
                    ]
                ]
            );
        }
        if($this->file){
            $file = $this->file->store('maps');
            $original = $this->file->getClientOriginalName();
        }

        if($this->name != $this->map->name){
            $stripe->products->update(
                $this->map->stripe,
                ['name' => $this->name]
            );
        }
        $this->map->update(array_filter([
            'name' => $this->name,
            'slug' => $slug,
            'price' => number_format($this->price, 2),
            'size' => $this->size,
            'image' => $image,
            'file' => $file,
            'original' => $original,
            'body' => $this->body,
            'description' => $this->description
        ]));
        session()->flash('success', 'Map has been updated!');
    }
}