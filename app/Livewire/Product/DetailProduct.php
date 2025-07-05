<?php

namespace App\Livewire\Product;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class DetailProduct extends Component
{
    public $id;
    public $qty = 1;

    #[Computed]
    public function product()
    {
        return Product::find($this->id);
    }

    public function increment()
    {
        if ($this->qty < $this->product()->stock) {
            $this->qty++;
        } else {
            $this->addError('error', 'Stock Tidak Mencukupi');
        }
    }

    public function decrement()
    {
        if ($this->qty > 1) {
            $this->qty--;
        } else {
            $this->addError('error', 'Stock Tidak Mencukupi');
        }
    }

    public function addToCart()
    {
        if ($this->qty >= $this->product()->stock) {
            $this->addError('error', 'Stock Tidak Mencukupi');
        }

        if ($this->qty <= 0) {
            $this->addError('error', 'Tidak Boleh Kurang Dari 0');
        }

        if (!Auth::check()) {
            session()->flash('status', 'Anda harus login terlebih dahulu');
            return redirect('/login');
        }

        try {
            Order::createOrder($this->product(), $this->qty);
            return redirect('/cart');
        } catch (\Exception $e) {
            $this->addError('error', $e->getMessage());
        }
    }


    public function render()
    {
        $data = $this->product();
        return view('livewire.product.detail-product', compact('data'))->extends('layouts.app');
    }
}
