@props(['title'])

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MMB Store - Công nghệ & Phụ kiện' }}</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>

<body>

<header>
    <div class="logo">
        <a href="{{ route('site.home') }}">
            <h1>MMB<span>Store</span></h1>
        </a>
    </div>
    
    <nav>
        <a href="{{ route('site.home') }}" class="{{ request()->routeIs('site.home') ? 'active' : '' }}">Trang chủ</a>
        <a href="{{ route('site.product.index') }}" class="{{ request()->routeIs('site.product.*') ? 'active' : '' }}">Sản phẩm</a>
        <a href="{{ route('site.topic.index') }}" class="{{ request()->routeIs('site.topic.*') ? 'active' : '' }}">Chủ đề</a>
        <a href="{{ route('site.post.index') }}" class="{{ request()->routeIs('site.post.*') ? 'active' : '' }}">Bài viết</a>
        <a href="{{ route('site.contact.index') }}" class="{{ request()->routeIs('site.contact.*') ? 'active' : '' }}">Liên hệ</a>
    </nav>

    <div class="header-actions">
        <a href="#" class="btn-cart">
            <span>🛒</span> Giỏ hàng
        </a>
    </div>
</header>

<main>
    {{ $slot }}
</main>

<footer>
    <div class="footer-grid">
        <div class="footer-col">
            <h1 style="color: white; margin: 0; font-size: 24px;">MMB<span style="color: var(--mmb-accent);">Store</span></h1>
            <p style="margin-top: 20px;">Đơn vị cung cấp các giải pháp công nghệ và phụ kiện hàng đầu. Uy tín làm nên thương hiệu.</p>
        </div>
        <div class="footer-col">
            <h4>Khám phá</h4>
            <ul class="footer-links">
                <li><a href="{{ route('site.product.index') }}">Sản phẩm mới</a></li>
                <li><a href="{{ route('site.topic.index') }}">Chủ đề hot</a></li>
                <li><a href="#">Khuyến mãi</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Hỗ trợ</h4>
            <ul class="footer-links">
                <li><a href="#">Chính sách bảo hành</a></li>
                <li><a href="#">Vận chuyển</a></li>
                <li><a href="{{ route('site.contact.index') }}">Liên hệ hỗ trợ</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>MMB Social</h4>
            <p>📍 TP. Hồ Chí Minh, Việt Nam</p>
            <p>📞 1900 xxxx</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© {{ date('Y') }} MMB Store - Phát triển bởi Alo toi la bo</p>
    </div>
</footer>

</body>
</html>