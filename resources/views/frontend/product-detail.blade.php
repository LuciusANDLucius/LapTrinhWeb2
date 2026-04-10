<x-layout-site :title="$product->name">

    <div style="display: flex; gap: 40px; align-items: flex-start; background: white; padding: 20px; border-radius: 15px;">
        
        <div style="flex: 1; text-align: center; border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #f9f9f9;">
            <img src="{{ asset('images/products/' . ($product->image ?? 'default.jpg')) }}" 
                 alt="{{ $product->name }}" 
                 style="width: 100%; max-height: 500px; object-fit: contain; transition: transform 0.3s ease;"
                 onmouseover="this.style.transform='scale(1.05)'"
                 onmouseout="this.style.transform='scale(1)'">
        </div>

        <div style="flex: 1.2;">
            <nav style="background: none; text-align: left; padding: 0; margin-bottom: 15px; position: static;">
                <a href="{{ route('site.home') }}" style="color: #007bff; font-size: 14px; margin: 0;">Trang chủ</a> / 
                <a href="{{ route('site.product.index') }}" style="color: #007bff; font-size: 14px; margin: 0 5px;">Sản phẩm</a> /
                <span style="color: #636e72; font-size: 14px;">{{ $product->name }}</span>
            </nav>

            <h2 style="border: none; padding: 0; margin: 0 0 15px 0; font-size: 32px; color: #2d3436;">
                {{ $product->name }}
            </h2>

            <div style="background: #fff5f5; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                <span style="font-size: 28px; font-weight: bold; color: #ff7675;">
                    {{ number_format($product->price) }} <span style="font-size: 18px;">VND</span>
                </span>
                @if($product->price_sale < $product->price && $product->price_sale > 0)
                    <span style="text-decoration: line-through; color: #b2bec3; margin-left: 15px;">
                        {{ number_format($product->price_sale) }} VND
                    </span>
                @endif
            </div>

            <div style="margin-bottom: 25px;">
                <h4 style="margin-bottom: 10px; color: #636e72;">Mô tả sản phẩm:</h4>
                <p style="color: #2d3436; line-height: 1.8;">
                    {{ $product->description ?? 'Đang cập nhật nội dung chi tiết cho sản phẩm này...' }}
                </p>
            </div>

            <div style="display: flex; gap: 15px; margin-top: 30px;">
                <button style="
                    flex: 1;
                    background: #007bff;
                    color: white;
                    border: none;
                    padding: 15px;
                    border-radius: 8px;
                    font-weight: bold;
                    cursor: pointer;
                    font-size: 16px;
                    transition: 0.3s;
                " onmouseover="this.style.background='#0056b3'" onmouseout="this.style.background='#007bff'">
                    Mua Ngay
                </button>
                
                <button style="
                    flex: 1;
                    background: white;
                    color: #007bff;
                    border: 2px solid #007bff;
                    padding: 15px;
                    border-radius: 8px;
                    font-weight: bold;
                    cursor: pointer;
                    font-size: 16px;
                ">
                    Thêm vào giỏ hàng
                </button>
            </div>

            <div style="margin-top: 30px; border-top: 1px dashed #eee; padding-top: 20px;">
                <p style="font-size: 14px; color: #636e72;">
                    ✅ Giao hàng nhanh toàn quốc<br>
                    ✅ Bảo hành chính hãng 12 tháng<br>
                    ✅ Đổi trả trong vòng 7 ngày
                </p>
            </div>
        </div>
    </div>

    <div style="margin-top: 40px; margin-bottom: 20px;">
        <a href="{{ route('site.product.index') }}" style="text-decoration: none; color: #007bff; font-weight: bold;">
            ← Quay lại danh sách sản phẩm
        </a>
    </div>

    <!-- Related Products Component -->
    <x-other-detail :product="$product" />

</x-layout-site>