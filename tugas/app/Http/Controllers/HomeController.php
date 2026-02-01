<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class HomeController extends Controller
{
   public function index(Request $request)
{
    $search = $request->search;

    $products = Product::when($search, function ($query, $search) {
        $query->where('name', 'like', "%{$search}%");
    })->paginate(8);

    return view('home', compact('products'));
}

    public function cart(){
        return view('cart');
    }


    public function click($product_id){
        $product = Product::findOrFail($product_id);
        $product->click = $product->click + 1;
        $product->save();

        $no_wa = '0882-2490-0842';

        $text = 'Halo saya ingin membeli product'.$product->name;

        $url = 'https://api.whatsapp.com/send?phone'.$no_wa.'&text='.urlencode($text);

        return redirect()->away($url);
    }
}
