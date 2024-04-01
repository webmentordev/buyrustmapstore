<?php

namespace App\Livewire\Free;

use App\Models\FreeMap;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $name, $slug, $size, $image, $file, $map;
    
    public function rules() 
    {
        return [
            'name' => 'required|max:255',
            'size' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp',
            'file' => 'nullable|file|max:100000|mimes:zip'
        ];
    }

    public function render()
    {
        return view('livewire.free.update');
    }

    public function mount($slug){
        $map = FreeMap::where('slug', $slug)->first();
        if($map){
            $this->map = $map;
            $this->name = $map->name;
            $this->slug = $map->slug;
            $this->size = $map->size;
        }else{
            abort(404);
        }
    }

    public function mapUpdate(){
        $this->validate();
        $image = null;
        $file = null;

        if($this->image){
            $image = '/storage/'.$this->image->storeAs('free_images',  $this->slug.'.'.$this->image->getClientOriginalExtension(), 'public_disk');
        }
        if($this->file){
            $file = $this->file->store('free_maps');
        }
        $this->map->update(array_filter([
            'name' => $this->name,
            'slug' => $this->slug,
            'size' => $this->size,
            'image' => $image,
            'file' => $file
        ]));
        session()->flash('success', 'Map has been updated!');
    }
}
