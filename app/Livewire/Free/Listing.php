<?php

namespace App\Livewire\Free;

use App\Models\FreeMap;
use Livewire\Component;

class Listing extends Component
{
    public function render()
    {
        return view('livewire.free.listing',[
            'maps' => FreeMap::latest()->get()
        ]);
    }

    public function updateStatus($slug) {
        $map = FreeMap::where('slug', $slug)->first();
        $map->is_active = !$map->is_active;
        $map->save();
    }
}