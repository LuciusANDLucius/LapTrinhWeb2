@props(['title'])

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Store' }}</title>

    <style>
        :root {
            --primary-color: #007bff; /* Màu xanh dương tươi */
            --secondary-color: #f8f9fa;
            --text-color: #2d3436;
            --accent-color: #ff7675; /* Màu nhấn cho các nút hoặc thông báo */
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #f4f7f6; /* Nền xám cực nhẹ giúp nổi bật nội dung */
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Header & Navigation Gộp chung làm 1 thanh hiện đại */
        header {
            background: #ffffff;
            padding: 0 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo h1 {
            color: var(--primary-color);
            margin: 0;
            font-size: 26px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav {
            display: flex;
            gap: 10px;
        }

        nav a {
            color: #636e72;
            padding: 8px 16px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: var(--primary-color);
            background: rgba(0, 123, 255, 0.1);
        }

        nav a.active {
            color: white;
            background: var(--primary-color);
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }

        /* Nội dung chính */
        main {
            max-width: 1200px;
            margin: 30px auto;
            padding: 30px;
            background: white;
            min-height: 600px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        }

        h2 {
            color: var(--text-color);
            border-left: 5px solid var(--primary-color);
            padding-left: 15px;
            margin-bottom: 30px;
        }

        /* Footer */
        footer {
            background: #2d3436;
            color: #dfe6e9;
            text-align: center;
            padding: 40px 0;
            margin-top: 50px;
        }

        footer p { margin: 5px 0; }

        /* Responsive cho Mobile */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                height: auto;
                padding: 15px;
            }
            nav {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        <h1>{{ $title ?? 'HITC Store' }}</h1>
    </div>
    
    <nav>
        <a href="{{ route('site.home') }}" class="{{ request()->routeIs('site.home') ? 'active' : '' }}">
            Trang chủ
        </a>

        <a href="{{ route('site.product.index') }}" class="{{ request()->routeIs('site.product.*') ? 'active' : '' }}">
            Sản phẩm
        </a>
            <a href="{{ route('site.topic.index') }}" 
            class="{{ request()->routeIs('site.topic.*') ? 'active' : '' }}">
              Chủ đề
          </a>
        <a href="#" class="{{ request()->is('bai-viet*') ? 'active' : '' }}">
            Bài viết
        </a>

        <a href="#" class="{{ request()->is('gio-hang*') ? 'active' : '' }}">
            🛒 Giỏ hàng
        </a>

        <a href="{{ route('site.contact.index') }}" class="{{ request()->routeIs('site.contact.*') ? 'active' : '' }}">
            Liên hệ
        </a>
    </nav>
</header>

<main>
    {{ $slot }}
</main>

<footer>
    <p><strong>{{ $title ?? 'Laravel Project' }}</strong></p>
    <p>© {{ date('Y') }} - Thiết kế bởi Alo toi la bo</p>
</footer>

</body>
</html>