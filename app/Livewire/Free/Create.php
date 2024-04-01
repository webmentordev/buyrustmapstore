<?php

namespace App\Livewire\Free;

use App\Models\FreeMap;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name, $size, $file, $image;


    public function rules() 
    {
        return [
            'name' => 'required|max:255',
            'size' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp',
            'file' => 'required|file|max:100000|mimes:zip'
        ];
    }
    
    public function render()
    {
        return view('livewire.free.create');
    }

    public function createMap(){
        $this->validate();
        $slug = str_replace(' ','-', strtolower($this->name)).'-'.rand(99, 9999999);
        $image = '/storage/'.$this->image->storeAs('free_images',  $slug.'.'.$this->image->getClientOriginalExtension(), 'public_disk');
        FreeMap::create([
            'name' => $this->name,
            'slug' => $slug,
            'size' => $this->size,
            'image' => $image,
            'file' => $this->file->store('free_maps')
        ]);
        session()->flash('success', 'Free Map has been created!');
    }
}