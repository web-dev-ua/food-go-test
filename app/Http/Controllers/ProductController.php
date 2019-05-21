<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => ProductResource::collection(Product::with(['category', 'tags'])->get())
        ]);
    }
}
