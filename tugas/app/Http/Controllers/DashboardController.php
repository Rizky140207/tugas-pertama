<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\ProductCategory;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahProduct = Product::count();

        $jumlahClikProduct = Product::sum('click');

        $jumlahKategoriProduct = ProductCategory::count();

        return view(
            'dashboard',
            compact(
                'jumlahProduct',
                'jumlahClikProduct',
                'jumlahKategoriProduct'
            )
        );
    }
}
