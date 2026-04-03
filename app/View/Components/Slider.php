<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Banner;
class Slider extends Component
{
    public $slides = [];

   
    public function __construct()
    {
        $this->slides = [
            [
                'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=1200&auto=format&fit=crop',
                'title' => 'Công nghệ đột phá',
                'description' => 'Khám phá bộ sưu tập điện thoại mới nhất với các tính năng vượt trội.',
                'link' => '#'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?q=80&w=1200&auto=format&fit=crop',
                'title' => 'Làm việc hiệu quả',
                'description' => 'Laptop mạnh mẽ giúp bạn xử lý mọi tác vụ.',
                'link' => '#'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=1200&auto=format&fit=crop',
                'title' => 'Âm thanh sống động',
                'description' => 'Tai nghe không dây chống ồn cao cấp.',
                'link' => '#'
            ]
        ];
    }


    public function render(): View|Closure|string
    {
        return view('components.slider');
    }
}
