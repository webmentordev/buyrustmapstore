<?php

namespace App\Livewire;

use App\Models\Map;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Maps extends Component
{
    #[Layout('layouts.base')] 
    public function render()
    {
        return view('livewire.maps', [
            'maps' => Map::latest()->where('is_active', true)->get()
        ]);
    }
}