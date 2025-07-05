<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function shop(Request $request)
    {
        $datas = Product::all();

        if ($request->has('category')) {
            $datas = Product::where('category_id', $request->category)->get();
        }
        if ($request->has('search')) {
            $datas = Product::where('name', 'LIKE', '%' . $request->search . '%')->get();
        }



        $categories = Category::all();
        return view('shop', compact('datas', 'categories'));
    }
}
