<?php

namespace App\Livewire\Transaction;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public function checkout()
    {
        $datas = Order::where('user_id', Auth::id())->where('status', 'pending')->get()->first();
        $datas->status = 'checkout';
        $datas->save();
        session()->flash('status', 'Checkout Berhasil');
        return redirect('/');
    }

    public function render()
    {
        $datas = Order::where('user_id', Auth::id())->where('status', 'pending')->get()->first();
        $total_price = $datas->total_price;
        $datas = $datas->items;


        // dd($datas[0]['product']['price']);
        return view('livewire.transaction.cart', compact('datas', 'total_price'))->extends('layouts.app');
    }
}
