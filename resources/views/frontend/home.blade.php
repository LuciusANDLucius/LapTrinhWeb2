<x-layout-site title="Trang chủ">

    <x-slider />
    <x-product-sale />
    <x-product-new />

    <div class="section-title section-header">
        <h2>Sản phẩm nổi bật</h2>
        <a href="{{ route('site.product.index') }}" class="section-link">Xem tất cả →</a>
    </div>

    <div style="text-align: center; padding: 50px; color: #636e72;">
        <p>Nội dung sản phẩm đang được cập nhật...</p>
    </div>

</x-layout-site>