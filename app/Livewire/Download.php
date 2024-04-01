<?php

namespace App\Livewire;

use App\Models\Purchase;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

class Download extends Component
{
    public $map;

    #[Layout('layouts.base')]
    public function render()
    {
        return view('livewire.download');
    }

    public function mount($checkout){
        $map = Purchase::where('checkout_id', $checkout)->first();
        if($map){
            $this->map = $map;
        }else{
            abort(404);
        }
    }
}