<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return $product;
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->only('name','price'));
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return "success";
    }
}
