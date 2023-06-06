<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view($id)
    {
        $product = Product::with('category')->with('user')->where('id', $id)->get();
        dd($product);
        return view('frontend.product.view', compact('product'));
    }
}
