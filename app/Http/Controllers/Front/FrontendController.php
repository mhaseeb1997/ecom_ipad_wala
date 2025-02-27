<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrderPlaced;
use App\Models\Products;
use App\Models\ProductVariants;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function index()
    {

        $products = Products::take(4)->get();
        return view('front.index', compact('products'));
    }

    public function product(Request $request)
    {
        $key = $request->search;
        if ($key) {
            $products = Products::where('name', 'LIKE', "%$key%")->latest()->get();
        } else {
            $products = Products::latest()->get();
        }
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

    public function order_placed(Request $request)
    {

        $user_id = Auth::id();
        $request->validate([
            'bank_receipt' => 'required',
            'pro_id' => 'required',
            'pro_vid' => 'required',
        ]);

        if ($request->hasFile('bank_receipt')) {
            $image = $request->file('bank_receipt');
            $bank_receipt = time() . '_' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('front/order/bank_receipt');
            $image->move($destinationPath, $bank_receipt);
        }

        $category = OrderPlaced::create([
            'bank_receipt' => $bank_receipt,
            'user_id' => $user_id,
            'pro_id' => $request->pro_id,
            'pro_vid' => $request->pro_vid,
            'status' => 0,
        ]);

        return redirect()->route('user_dashboard');

    }

    public function dashboard(Request $request)
    {
        $user_id = Auth::id();
        $orders = OrderPlaced::with('product', 'product_variants')->where('user_id', $user_id)->get();
        return view('front.dashboard', compact('orders'));
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
