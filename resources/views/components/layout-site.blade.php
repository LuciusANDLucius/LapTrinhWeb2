@props(['title'])

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MMB Store - Công nghệ & Phụ kiện' }}</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --mmb-primary: #1e3799;   /* Xanh Navy - Tin cậy */
            --mmb-accent: #ff7f50;    /* Cam Coral - Năng động */
            --mmb-dark: #2d3436;
            --mmb-bg: #f8f9fc;
            --mmb-white: #ffffff;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            background-color: var(--mmb-bg);
            color: var(--mmb-dark);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* --- HEADER --- */
        header {
            background: var(--mmb-white);
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 90px;
            box-shadow: 0 4px 20px rgba(30, 55, 153, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo a {
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo h1 {
            color: var(--mmb-primary);
            margin: 0;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .logo h1 span {
            color: var(--mmb-accent);
        }

        /* --- NAVIGATION --- */
        nav {
            display: flex;
            gap: 5px;
            background: var(--mmb-bg);
            padding: 5px;
            border-radius: 40px;
        }

        nav a {
            color: #636e72;
            padding: 10px 22px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            border-radius: 30px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        nav a:hover {
            color: var(--mmb-primary);
        }

        nav a.active {
            color: white;
            background: var(--mmb-primary);
            box-shadow: 0 4px 15px rgba(30, 55, 153, 0.3);
        }

        /* --- ACTIONS (Cart) --- */
        .header-actions {
            display: flex;
            align-items: center;
        }

        .btn-cart {
            background: var(--mmb-accent);
            color: white;
            padding: 12px 25px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
        }

        .btn-cart:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 127, 80, 0.4);
        }

        /* --- MAIN CONTENT --- */
        main {
            max-width: 1300px;
            margin: 40px auto;
            width: 90%;
            padding: 40px;
            background: var(--mmb-white);
            min-height: 600px;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.02);
        }

        h2 {
            font-size: 32px;
            font-weight: 800;
            color: var(--mmb-primary);
            margin-bottom: 40px;
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 5px;
            background: var(--mmb-accent);
            border-radius: 10px;
        }

        /* --- FOOTER --- */
        footer {
            background: var(--mmb-primary);
            color: #ffffff;
            padding: 60px 5% 30px;
            margin-top: auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .footer-col h4 {
            color: var(--mmb-accent);
            font-size: 18px;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .footer-col p { opacity: 0.8; font-size: 14px; }

        .footer-links { list-style: none; padding: 0; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links li a { 
            color: white; 
            text-decoration: none; 
            opacity: 0.7; 
            transition: 0.3s;
            font-size: 14px;
        }
        .footer-links li a:hover { opacity: 1; padding-left: 5px; color: var(--mmb-accent); }

        .footer-bottom {
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 13px;
            opacity: 0.6;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 1024px) {
            header { flex-direction: column; height: auto; padding: 20px; gap: 20px; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }
    </style>
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