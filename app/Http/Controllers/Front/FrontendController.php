<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function product()
    {
        $products = Products::latest()->get();
        return view('front.product', compact('products'));
    }

    public function product_detail($slug)
    {
        $product = Products::with('product_variants')->where('slug' , $slug)->first();
        return view('front.product-detail', compact('product'));
    }
}
