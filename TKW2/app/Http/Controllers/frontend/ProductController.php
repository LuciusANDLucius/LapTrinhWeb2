<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.product');
    }

    public function detail($slug)
    {
        return view('frontend.product-detail');
    }
}