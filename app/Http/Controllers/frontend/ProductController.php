<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Danh sách sản phẩm
    // 1. Danh sách sản phẩm
    public function index(Request $request)
    {
        $query = Product::where('status', 1);

        // Lọc theo Keyword
        if ($request->filled('keyword')) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        // Lọc theo Danh mục
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Lọc theo Thương hiệu
        if ($request->filled('brand_id')) {
            $query->where('brand_id', $request->brand_id);
        }

        // Lọc theo Khoảng giá
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Sắp xếp
        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
            }
        } else {
            $query->orderBy('created_at', 'desc'); // Mặc định mới nhất
        }

        $products = $query->paginate(12)->withQueryString();

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