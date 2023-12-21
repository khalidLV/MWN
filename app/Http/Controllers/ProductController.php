<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $Product = Product::all();
        return view('Product.index', compact('Product'));
    }

    public function show($id)
    {
        // $product = Product::find($id);
        // return view('Product.show', ['product' => $product]);
    }
    public function create()
    {
        return view('Product.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'Price' => 'required|string|max:1000000',
        ]);

        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'Price' => $request->input('Price'),
        ]);

        return redirect()->route('Product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Product.edit', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('Product.index');
    }
}
