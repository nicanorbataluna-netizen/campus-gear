<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Eloquent query fetching newest records first
        $products = Product::latest()->get();

        return view('products.index', [
            'products' => $products,
            'totalCount' => Product::count(),
            'inStockCount' => Product::where('is_available', true)->count(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products,sku',
            'category' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        $validated['is_available'] = $request->has('is_available');

        // Safe Mass Assignment via Eloquent
        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully!');
    }
}