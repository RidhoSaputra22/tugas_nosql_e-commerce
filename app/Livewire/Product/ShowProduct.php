<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ShowProduct extends Component
{


    public function render()
    {
        $datas = Product::all();
        $categories = Category::all();
        return view('livewire.product.show-product', compact('datas', 'categories'))->extends('layouts.app');
    }
}
