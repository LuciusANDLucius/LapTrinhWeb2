@if($relatedProducts && $relatedProducts->count() > 0)
    <div style="margin-top: 50px; border-top: 2px solid #f1f2f6; padding-top: 40px;">
        <h2 style="font-size: 28px; color: var(--mmb-primary); margin-bottom: 30px; text-align: center;">Sản phẩm liên quan</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 25px;">
            @foreach($relatedProducts as $item)
                <div style="width: 100%;">
                    <x-product-card :product="$item" />
                </div>
            @endforeach
        </div>
    </div>
@endif