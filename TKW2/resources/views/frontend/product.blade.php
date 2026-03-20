<x-layout-site title="Sản phẩm">

    <h2>Danh sách sản phẩm</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach ($products as $product)
            <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; width: 200px; text-align: center;">
                
                <a href="{{ route('site.product.detail', $product->slug) }}">
                    <img src="{{ asset('images/products/' . ($product->image ?? 'default.jpg')) }}" 
                         alt="{{ $product->name }}" 
                         style="width: 100%; height: 180px; object-fit: cover; margin-bottom: 10px; border-radius: 4px;">
                </a>

                <div>
                    <a href="{{ route('site.product.detail', $product->slug) }}" style="text-decoration: none; font-weight: bold; color: #333;">
                        {{ $product->name }}
                    </a>
                </div>
                
                <div style="color: #e44d26; margin-top: 5px;">
                    {{ number_format($product->price) }} VND
                </div>
            </div>
        @endforeach
    </div>

</x-layout-site>