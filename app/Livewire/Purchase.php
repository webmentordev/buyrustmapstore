<?php

namespace App\Livewire;

use App\Mail\OrderConfirmed;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use App\Models\Purchase as PurchaseModel;

class Purchase extends Component
{
    public $status, $checkout, $order;

    #[Layout('layouts.base')] 
    public function render()
    {
        return view('livewire.purchase');
    }

    public function mount($status, $checkout){
        $this->status = $status;
        $this->checkout = $checkout;
        $order = PurchaseModel::where('checkout_id', $checkout)->first();
        if($order){
            if($order->status == 'unpaid' && $status == "success"){
                Mail::to($order->email)->send(new OrderConfirmed($order->checkout_id));
                $order->status = "paid";
                $order->save();
            }elseif($order->status == 'unpaid' && $status == "cancel"){
                $order->status = "cancel";
                $order->save();
            }
        }else{
            abort(404);
        }
    }
}