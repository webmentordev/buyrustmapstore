<?php

namespace App\Livewire\Maps;

use App\Models\Map;
use Livewire\Component;

class Listing extends Component
{
    public function render()
    {
        return view('livewire.maps.listing', [
            'maps' => Map::latest()->get()
        ]);
    }

    public function updateStatus($slug) {
        $map = Map::where('slug', $slug)->first();
        $map->is_active = !$map->is_active;
        $map->save();
    }
}
