<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        // Lấy danh sách các chủ đề đang hoạt động
        $topics = Topic::where('status', 1)->get();
        
        return view('frontend.topic', compact('topics'));
    }
}