<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;

class CategoryFilter extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Closure|string
    {
        $list_category = Category::select('id', 'name')
        ->where([['status', 1], ['parent_id', 0]])
        ->orderBy('sort_order', 'asc')
        ->get();
        return view('components.category-filter', compact('list_category'));
    }
}
