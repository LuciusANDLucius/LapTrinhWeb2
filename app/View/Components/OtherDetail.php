<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Category;

class OtherDetail extends Component
{
    public $relatedProducts;

    public function __construct($product)
    {
        $categoryId = $product->category_id;
        
        $category = Category::find($categoryId);
        
        if ($category) {
            $parentId = $category->parent_id ? $category->parent_id : $category->id;
            
            $categoryIds = Category::where('id', $parentId)
                                 ->orWhere('parent_id', $parentId)
                                 ->pluck('id')
                                 ->toArray();
                                 
            $this->relatedProducts = Product::whereIn('category_id', $categoryIds)
                                          ->where('id', '!=', $product->id)
                                          ->where('status', 1)
                                          ->limit(4) 
                                          ->get();
        } else {
            $this->relatedProducts = collect();
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.other-detail');
    }
}
