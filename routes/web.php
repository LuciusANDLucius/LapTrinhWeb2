<?php

use Illuminate\Support\Facades\Route;
// Frontend Controllers
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\TopicController;
use App\Http\Controllers\frontend\PostController;

// Backend Controllers (Dùng cho Admin)
use App\Http\Controllers\Backend\ProductController as BackendProduct;

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES (Người dùng xem)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/san-pham', [ProductController::class, 'index'])->name('site.product.index');
Route::get('/chi-tiet-san-pham/{slug}', [ProductController::class, 'detail'])->name('site.product.detail');
Route::get('/chu-de', [TopicController::class, 'index'])->name('site.topic.index');
Route::get('/chu-de/{slug}', [TopicController::class, 'detail'])->name('site.topic.detail');
Route::get('/bai-viet', [PostController::class, 'index'])->name('site.post.index');
Route::get('/chi-tiet-bai-viet/{slug}', [PostController::class, 'detail'])->name('site.post.detail');
Route::get('/lien-he', function() { return "Trang liên hệ đang cập nhật"; })->name('site.contact.index');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (Phần Quản trị)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    
    // Trang chủ Dashboard
    Route::get('/', function() {
        return view('backend.dashboard.index');
    })->name('admin.dashboard');

    /* --- QUẢN LÝ SẢN PHẨM --- */
    // QUY TẮC: Phải để các route thủ công (trash, restore, forceDelete) TRƯỚC resource
    
    // 1. Thùng rác (Trash)
    Route::get('products/trash', [BackendProduct::class, 'trash'])->name('products.trash');
    
    // 2. Khôi phục sản phẩm
    Route::get('products/{id}/restore', [BackendProduct::class, 'restore'])->name('products.restore');
    
    // 3. Xóa vĩnh viễn khỏi CSDL
    Route::delete('products/{id}/force-delete', [BackendProduct::class, 'forceDelete'])->name('products.forceDelete');
    
    // 4. Resource: Index, Create, Store, Edit, Update, Destroy
    Route::resource('products', BackendProduct::class);


});