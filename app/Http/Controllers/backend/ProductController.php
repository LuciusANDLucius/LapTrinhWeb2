<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    /**
     * Danh sách sản phẩm: Tìm kiếm, lọc, sắp xếp và phân trang
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Eager Loading để lấy tên danh mục/thương hiệu
        $query->with(['category:id,name', 'brand:id,name']);

        // 1. Tìm kiếm theo tên sản phẩm
        if ($request->has('keyword') && !empty($request->input('keyword'))) {
            $query->where('name', 'like', '%' . $request->input('keyword') . '%');
        }

        // 2. Lọc theo danh mục
        if ($request->has('category_id') && !empty($request->input('category_id'))) {
            $query->where('category_id', $request->input('category_id'));
        }

        // 3. Lọc theo thương hiệu
        if ($request->has('brand_id') && !empty($request->input('brand_id'))) {
            $query->where('brand_id', $request->input('brand_id'));
        }

        // 4. Sắp xếp (Đã sửa từ price_buy sang price theo DB thực tế)
        if ($request->has('sort_by') && !empty($request->input('sort_by'))) {
            $sortBy = $request->input('sort_by');
            if ($sortBy == 'price_asc') $query->orderBy('price', 'asc');
            elseif ($sortBy == 'price_desc') $query->orderBy('price', 'desc');
            elseif ($sortBy == 'name_asc') $query->orderBy('name', 'asc');
            elseif ($sortBy == 'name_desc') $query->orderBy('name', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        // 5. Phân trang 10 sản phẩm/trang
        $products = $query->paginate(10); 
    
        return view('backend.dashboard.products.products', compact('products'));
    }

    /**
     * Hiển thị thùng rác
     */
    public function trash()
    {
        $products = Product::onlyTrashed()
            ->with(['category:id,name'])
            ->orderBy('deleted_at', 'desc')
            ->paginate(10); 

        return view('backend.dashboard.products.trash', compact('products'));
    }

    /**
     * Form thêm mới sản phẩm
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.dashboard.products.create', compact('categories', 'brands'));
    }

    /**
     * Form chỉnh sửa sản phẩm
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.dashboard.products.edit', compact('product', 'categories', 'brands'));
    }

    /**
     * Xóa mềm
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product) {
            $product->delete();
            return redirect()->route('products.index')->with('success', 'Đã chuyển vào thùng rác');
        }
        return redirect()->route('products.index')->with('error', 'Không tìm thấy sản phẩm');
    }

    /**
     * Khôi phục
     */
    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        if($product) {
            $product->restore();
            return redirect()->route('products.trash')->with('success', 'Đã khôi phục sản phẩm');
        }
        return redirect()->route('products.trash')->with('error', 'Lỗi khôi phục');
    }

    /**
     * Xóa vĩnh viễn
     */
    public function forceDelete($id)
    {
        $product = Product::onlyTrashed()->find($id);
        if($product) {
            $product->forceDelete();
            return redirect()->route('products.trash')->with('success', 'Đã xóa vĩnh viễn');
        }
        return redirect()->route('products.trash')->with('error', 'Lỗi xóa vĩnh viễn');
    }

    // Các hàm store() và update() sẽ được hoàn thiện phần xử lý logic ở Buổi 06
    public function store(Request $request) { return redirect()->route('products.index'); }
    public function update(Request $request, $id) { return redirect()->route('products.index'); }
}