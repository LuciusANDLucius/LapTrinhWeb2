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
        return view('components.brand-filter');
    }
}
