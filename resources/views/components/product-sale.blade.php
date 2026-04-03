<div class="product-section" style="margin-bottom: 50px;">
    <div class="section-header">
        <h2 style="color: var(--mmb-accent); display: flex; align-items: center; gap: 10px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-2.8-1.5-3.8-1-1-2.5-1.7-4.5-1.7-1 0-1.5.5-2 1-.5.5-1 1.5-1 3 0 .5.5 1 1 1s1-.5 1-1c0-.5.5-1 .5-1 .5-.5 1-1 1-1 1 .5 1.5 1.5 1.5 2.5 0 2.5-2 4.5-4.5 4.5S3.5 13 3.5 10.5C3.5 9 4 7.5 5 6c.5-.5 1-1.5 1-3 0-.5-.5-1-1-1-1 .5-2 1.5-2.5 3C2.5 6 2 7 2 8c0 3.5 2.686 5.5 6 5.5"/>
            </svg>
            Sản Phẩm Khuyến Mãi
        </h2>
        <a href="{{ route('site.product.index') }}" class="section-link">Xem tất cả →</a>
    </div>

    @if($sale_products->count() > 0)
        <div class="product-grid">
            @foreach($sale_products as $product_item)
                <x-product-card :product="$product_item" />
            @endforeach
        </div>
    @else
        <div style="text-align: center; padding: 30px; background: white; border-radius: 12px; color: #636e72;">
            Hiện tại chưa có sản phẩm khuyến mãi nào.
        </div>
    @endif
</div>
