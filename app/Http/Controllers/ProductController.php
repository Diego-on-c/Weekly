<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products= Product::all();
        return view ('product.index', ['products'=>$products]);
    }

  
    public function create()
    {
        return view ('product.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return \redirect(\route('product.index'));
    }

    public function show(Product $product)
    {
        //
    }

    
    public function edit(Product $product)
    {
        return view ('product.edit', ['product'=>$product]);
    }

  
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return \redirect(Route('product.index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return \redirect(Route('product.index'));
    }
}