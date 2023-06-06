<?php

namespace App\Http\Controllers\frontend;

use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductsListsController extends Controller
{
    public function catProduct($slug)
    {
        $category = Category::where('cat_slug', $slug)
            ->latest()
            ->first();
        $productLists = Product::with('productPrice', 'review')
            ->where('category_id', $category->id)
            ->latest()
            ->simplePaginate(4);
        $count = $productLists->count();
        return view('frontend.shopGrid', compact('category', 'productLists', 'count'));
    }
    public function subProduct($slug)
    {
        $subCategory = SubCategory::where('sub_slug', $slug)
            ->latest()
            ->first();
        $productLists = Product::with('productPrice', 'review')
            ->where('sub_category_id', $subCategory->id)
            ->latest()
            ->simplePaginate(5);
        $count = $productLists->count();
        $category = Category::with('subCategory')
            ->latest()
            ->get();
        return view('frontend.shopLeftList', compact('subCategory', 'productLists', 'count', 'category'));
    }

    public function searchProduct(Request $request)
    {
        $authUser = Auth::user();
        $SearchData = $request->product;
        $product = Product::where('title', 'LIKE', '%' . $SearchData . '%')
            ->with('user', 'category', 'subCategory', 'productImage', 'productPrice', 'comments.replies', 'user', 'comments.user', 'comments.replies.user', 'review')
            ->first();
        $id = Review::where('product_id', $product->id)->get();
        $five = Review::where('product_id', $product->id)
            ->where('ratings', 5)
            ->count();

        $four = Review::where('product_id', $product->id)
            ->where('ratings', 4)
            ->count();

        $three = Review::where('product_id', $product->id)
            ->where('ratings', 3)
            ->count();
        $two = Review::where('product_id', $product->id)
            ->where('ratings', 2)
            ->count();
        $one = Review::where('product_id', $product->id)
            ->where('ratings', 1)
            ->count();
        $totalCount = Review::where('product_id', $product->id)->count();
        $totalRatings = $five * 5 + $four * 4 + $three * 3 + $two * 2 + $one * 1;
        $averageResult = 0;
        if ($totalRatings > 0) {
            $averageResult = ceil($totalRatings / $totalCount);
        } else {
            $averageResult = 0;
        }
        $similarProduct = Product::limit(8)
            ->latest()
            ->get();
        return view('frontend.productDetailsPage', compact('product', 'five', 'four', 'three', 'two', 'one', 'averageResult', 'authUser', 'similarProduct'));
    }
}
