<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;

class Uploads extends Component
{
    public function render()
    {
        return view('livewire.uploads', [
            'images' => Upload::latest()->get()
        ]);
    }
}
