<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $variants = [];

        // Combine rows of variant data
        foreach ($request->variant['color'] as $index => $color) {
            $variants[] = [
                'color' => $color,
                'storage' => $request->variant['storage'][$index],
                'stock_count' => $request->variant['stock_count'][$index],
                'price' => $request->variant['price'][$index],
            ];
        }


        $category = Products::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        foreach ($variants as $variant) {
            // Replace with your model and fields
            ProductVariants::create([
                'pro_id' => $category->id,
                'color' => $variant['color'],
                'storage' => $variant['storage'],
                'price' => $variant['price'],
                'stock_count' => $variant['stock_count'],
            ]);
        }

        return redirect()->back()->with('success', 'Product variants saved successfully!');
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
        //
    }
}
