<x-layout-site title="Trang chủ">

    <div style="
        background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%);
        color: white;
        padding: 60px 40px;
        border-radius: 20px;
        margin-bottom: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 10px 30px rgba(0,123,255,0.2);
    ">
        <div style="max-width: 50%;">
            <h2 style="border: none; padding: 0; color: white; font-size: 42px; margin-bottom: 20px;">
                Khám phá Công nghệ mới nhất
            </h2>
            <p style="font-size: 18px; opacity: 0.9; mb-30">
                Chào mừng bạn đến với MMB Store. Nơi cung cấp những sản phẩm chất lượng cao với giá thành tốt nhất thị trường.
            </p>
            <a href="{{ route('site.product.index') }}" style="
                display: inline-block;
                background: white;
                color: #007bff;
                padding: 12px 30px;
                border-radius: 50px;
                text-decoration: none;
                font-weight: bold;
                margin-top: 20px;
                transition: 0.3s;
            "> Xem sản phẩm ngay </a>
        </div>

        <div style="flex: 1; text-align: right;">
            <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNHJueXF4ZzRyeXF4ZzRyeXF4ZzRyeXF4ZzRyeXF4ZzRyeXF4ZzRyeXF4JmVwPXYxX2ludGVybmFsX2dpZl9ieV9pZCZjdD1n/3o7TKMGpxx6Q90S8De/giphy.gif" 
                 alt="Tech Animation" 
                 style="width: 80%; max-width: 400px; border-radius: 15px;">
        </div>
    </div>

    <div class="section-title" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="margin: 0;">Sản phẩm nổi bật</h2>
        <a href="{{ route('site.product.index') }}" style="color: #007bff; text-decoration: none;">Xem tất cả →</a>
    </div>

    <div style="text-align: center; padding: 50px; color: #636e72;">
        <p>Nội dung sản phẩm đang được cập nhật...</p>
    </div>

</x-layout-site>