<?php

namespace App\Livewire;

use App\Models\Map;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Home extends Component
{
    #[Layout('layouts.base')] 
    public function render()
    {
        return view('livewire.home', [
            'maps' => Map::latest()->limit(12)->where('is_active', true)->get()
        ]);
    }
}