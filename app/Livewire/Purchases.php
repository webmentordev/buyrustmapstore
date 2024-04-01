<?php

namespace App\Livewire;

use App\Models\Purchase;
use Livewire\Component;

class Purchases extends Component
{
    public function render()
    {
        return view('livewire.purchases', [
            'purchases' => Purchase::latest()->get()
        ]);
    }
}
