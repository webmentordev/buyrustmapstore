<?php

namespace App\Livewire;

use App\Models\FreeMap;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Free extends Component
{
    #[Layout('layouts.base')] 
    public function render()
    {
        return view('livewire.free', [
            'maps' => FreeMap::latest()->where('is_active', true)->get()
        ]);
    }
}