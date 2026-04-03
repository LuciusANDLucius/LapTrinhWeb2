<div class="product-card" style="position: relative;">
    <a href="{{ route('site.product.detail', $product_item->slug) }}">
        <img src="{{ asset('images/products/' . ($product_item->image ?? 'default.jpg')) }}" 
             alt="{{ $product_item->name }}" 
             class="product-card-img">
    </a>

    @if($product_item->price_sale && $product_item->price_sale < $product_item->price)
        <div style="position: absolute; top: 10px; right: 10px; background: var(--mmb-accent); color: white; padding: 4px 10px; border-radius: 6px; font-size: 13px; font-weight: bold; box-shadow: 0 4px 10px rgba(255,127,80,0.4);">
            -{{ round(100 - ($product_item->price_sale / $product_item->price) * 100) }}%
        </div>
    @endif

    <div>
        <a href="{{ route('site.product.detail', $product_item->slug) }}" class="product-card-title">
            {{ $product_item->name }}
        </a>
    </div>
    
    <div class="product-card-price" style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 8px;">
        @if($product_item->price_sale && $product_item->price_sale < $product_item->price)
            <span style="color: var(--mmb-accent); font-size: 1.1em; font-weight: 700;">{{ number_format($product_item->price_sale) }} VND</span>
            <span style="text-decoration: line-through; color: #a4b0be; font-size: 0.85em; margin-top: 3px;">{{ number_format($product_item->price) }} VND</span>
        @else
            <span style="color: var(--mmb-accent); font-size: 1.1em; font-weight: 700;">{{ number_format($product_item->price) }} VND</span>
        @endif
    </div>
</div>
