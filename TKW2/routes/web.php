<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\TopicController;
use App\Http\Controllers\frontend\PostController;
// use App\Http\Controllers\frontend\ContactController; // Nếu có

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('site.home');

// Sản phẩm
Route::get('/san-pham', [ProductController::class, 'index'])->name('site.product.index');
Route::get('/chi-tiet-san-pham/{slug}', [ProductController::class, 'detail'])->name('site.product.detail');

// Chủ đề
Route::get('/chu-de', [TopicController::class, 'index'])->name('site.topic.index');
Route::get('/chu-de/{slug}', [TopicController::class, 'detail'])->name('site.topic.detail');

// BÀI VIẾT (Đây là đoạn thiếu dẫn đến lỗi của bạn)
Route::get('/bai-viet', [PostController::class, 'index'])->name('site.post.index');
Route::get('/chi-tiet-bai-viet/{slug}', [PostController::class, 'detail'])->name('site.post.detail');

// LIÊN HỆ
Route::get('/lien-he', function() {
    return "Trang liên hệ đang cập nhật";
})->name('site.contact.index');