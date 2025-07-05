<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $datas = Product::orderBy('like_count', 'desc')->take(4)->get();
        return view('livewire.home-page', compact('datas'))->extends('layouts.app');
    }
}
