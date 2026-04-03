<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;

class ProductNew extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $new_products = Product::orderBy('created_at', 'DESC')
                            ->take(5) // Lấy 5 sản phẩm mới nhất
                            ->get();

        return view('components.product-new', compact('new_products'));
    }
}
