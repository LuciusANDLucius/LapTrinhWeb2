<x-layout-site title="Sản phẩm">

    <h2>Danh sách sản phẩm</h2>

    <div class="product-grid">
        @foreach ($products as $product_item)
            <x-product-card :product="$product_item" />
        @endforeach
    </div>

</x-layout-site>