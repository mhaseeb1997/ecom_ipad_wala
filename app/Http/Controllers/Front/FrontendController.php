<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductVariants;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function product()
    {
        $products = Products::latest()->get();
        return view('front.product', compact('products'));
    }

    public function product_detail($slug)
    {
        $product = Products::with('product_variants')->where('slug', $slug)->first();
        return view('front.product-detail', compact('product'));
    }

    public function checkout(Request $request)
    {
        $pro_id = $request->pro_id;
        $color = $request->color;
        $storage = $request->storage;
        $price = $request->price;
        $product = Products::where('id', $pro_id)->first();
        $product_variant = ProductVariants::where('pro_id', $pro_id)->where('color', $color)->where('storage', $storage)->where('price', $price)->first();
        return view('front.checkout', compact('product', 'product_variant'));
    }

    public function auth()
    {
        return view('front.auth');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required',
            'password' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'city' => $request->city,
            'address' => $request->address,
        ]);
        if ($user) {
            Auth::attempt($request->only('email', 'password'));
            return redirect()->back()->with('success', 'Registration successful!');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
