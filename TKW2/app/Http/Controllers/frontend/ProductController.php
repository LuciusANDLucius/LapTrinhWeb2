<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    // Danh sách sản phẩm
    // 1. Danh sách sản phẩm
public function index()
{
    $products = Product::where('status', 1)->get();

    // Sửa từ 'frontend.product.index' thành 'frontend.product'
    return view('frontend.product', compact('products'));
}

// 2. Chi tiết sản phẩm
public function detail($slug)
{
    $product = Product::where('slug', $slug)
        ->where('status', 1)
        ->first();

    if (!$product) {
        abort(404);
    }

    // Sửa từ 'frontend.product.detail' thành 'frontend.product-detail'
    return view('frontend.product-detail', compact('product'));
}
}