<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderPlaced;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\ProductVariants;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = ProductCategory::get();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $variants = [];
        foreach ($request->variant['color'] as $index => $color) {
            $variants[] = [
                'quality' => $request->variant['quality'][$index],
                'color' => $color,
                'storage' => $request->variant['storage'][$index],
                'stock_count' => $request->variant['stock_count'][$index],
                'price' => $request->variant['price'][$index],
                'compare' => $request->variant['compare'][$index],
            ];
        }

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $thumbnail = time() . '_' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('front/product');
            $image->move($destinationPath, $thumbnail);
        }

        $gallery = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $uniqueName = time() . '_' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('front/product/gallery');
                $image->move($destinationPath, $uniqueName);
                $gallery[] = $uniqueName;
            }
            $save_gallery = implode(',', $gallery);
        }

        $category = Products::create([
            'cate_id' => $request->cate_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'thumbnail' => $thumbnail,
            'gallery' => $save_gallery,
            'description' => $request->description,
        ]);
        foreach ($variants as $variant) {
            ProductVariants::create([
                'pro_id' => $category->id,
                'quality' => $variant['quality'],
                'color' => $variant['color'],
                'storage' => $variant['storage'],
                'price' => $variant['price'],
                'compare' => $variant['compare'],
                'stock_count' => $variant['stock_count'],
            ]);
        }

        return redirect()->route('product.index')->with('success', 'Success, New category has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Products::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully');
    }

    public function order_detail()
    {
        $orders = OrderPlaced::with('product', 'product_variants')->get();
        return view('admin.orders', compact('orders'));
    }

    public function customer_info($order_id)
    {
        $order = OrderPlaced::where('id', $order_id)->first();
        return view('admin.customer_info', compact('order'));
    }
}
