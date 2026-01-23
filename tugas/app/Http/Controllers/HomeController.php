<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class HomeController extends Controller
{
    public function index (){
        $products = product::paginate(2);
        return view('home', compact('products'));
    }
    public function cart(){
        return view('cart');
    }
}
