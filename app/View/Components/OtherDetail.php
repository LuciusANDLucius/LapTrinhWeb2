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
            // Logic to find family (parent and all its children). 
            // If category has a parent, the parent is the root. Otherwise, this category is the root.
            $parentId = $category->parent_id ? $category->parent_id : $category->id;
            
            // Get all category IDs in this family
            $categoryIds = Category::where('id', $parentId)
                                 ->orWhere('parent_id', $parentId)
                                 ->pluck('id')
                                 ->toArray();
                                 
            // Get related products
            $this->relatedProducts = Product::whereIn('category_id', $categoryIds)
                                          ->where('id', '!=', $product->id)
                                          ->where('status', 1)
                                          ->limit(4) // or any aesthetic number
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
