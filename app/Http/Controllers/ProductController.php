<?php

namespace App\Http\Controllers;
Use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }
    
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);
    
        return redirect()->route('addProduct')->with('success', 'Product added successfully!');
    }

    public function index()
    {
        $products = Product::take(5)->get();
        return view('index', compact('products'));
    }

    public function getAll()
    {
        $products = Product::get();
        return view('products', compact('products'));
    }
    public function buy($id)
    {
        $product = Product::findOrFail($id);
    
        $product->delete();
    
        return redirect()->route('products')->with('success', 'Product has been bought!');
    }
    
}
