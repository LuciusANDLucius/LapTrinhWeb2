<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;

class CategoryFilter extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = Category::where('status', 1)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.category-filter');
    }
}
