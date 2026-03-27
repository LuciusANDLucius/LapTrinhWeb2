<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - 0192</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        body { background-color: #f4f6f9; }
        .sidebar {
            width: 250px; height: 100vh; position: fixed;
            background: #212529; color: white; padding-top: 20px;
        }
        .sidebar a {
            color: #adb5bd; text-decoration: none; padding: 12px 20px;
            display: flex; align-items: center; gap: 10px; transition: 0.3s;
        }
        .sidebar a:hover, .sidebar a.active { background: #343a40; color: #fff; }
        .main-content { margin-left: 250px; padding: 20px; }
        .card { border: none; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="px-4 mb-4">
            <h4 class="text-white">ADMIN</h4>
            <small class="text-muted">Hệ thống quản lý Shop</small>
        </div>
        
        <a href="/admin" class="active">
            <span class="material-symbols-outlined">dashboard</span> Dashboard
        </a>
        
        <div class="px-4 mt-3 mb-2 small text-uppercase text-muted">Quản lý sản phẩm</div>
        <a href="{{ route('products.index') }}">
            <span class="material-symbols-outlined">shopping_bag</span> Sản phẩm
        </a>
        <a href='category'>
            <span class="material-symbols-outlined">category</span> Danh mục
        </a>
        <a href="#">
            <span class="material-symbols-outlined">sell</span> Thương hiệu
        </a>

        <div class="px-4 mt-3 mb-2 small text-uppercase text-muted">Kinh doanh</div>
        <a href="#">
            <span class="material-symbols-outlined">shopping_cart</span> Đơn hàng
        </a>
        <a href="#">
            <span class="material-symbols-outlined">group</span> Khách hàng
        </a>

        <div class="px-4 mt-5">
            <a href="/" class="btn btn-outline-danger btn-sm w-100">Thoát</a>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Bảng điều khiển</h3>
            <div class="dropdown">
                <button class="btn btn-white shadow-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Chào, Hiếu 0192
                </button>
            </div>
        </div>

        <div class="container-fluid">
            {{ $slot }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>