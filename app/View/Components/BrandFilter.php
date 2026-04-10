<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Brand;

class BrandFilter extends Component
{
    public $brands;

    public function __construct()
    {
        $this->brands = Brand::where('status', 1)->get();
    }

    public function render(): View|Closure|string
    {
        $list_brand = Brand::select('id', 'name')
        ->where('status', 1)
        ->orderBy('sort_order', 'asc')
        ->get();
        return view('components.brand-filter', compact('list_brand'));
    }
}
