@props(['title'])

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Website Laravel' }}</title>

    <style>
        body{
            font-family: Arial;
            margin:0;
        }

        header{
            background:#333;
            color:white;
            padding:15px;
            text-align:center;
        }

        nav{
            background:#555;
            padding:10px;
            text-align:center;
        }

        nav a{
            color:white;
            margin:0 15px;
            text-decoration:none;
            font-weight:bold;
        }

        nav a:hover{
            color:yellow;
        }

        main{
            padding:20px;
            min-height:400px;
        }

        footer{
            background:#333;
            color:white;
            text-align:center;
            padding:10px;
        }
    </style>
</head>

<body>

<header>
    <h1>{{ $title ?? 'Website Laravel' }}</h1>
</header>

<nav>
    <a href="/">Trang chủ</a>
    <a href="/san-pham">Sản phẩm</a>
    <a href="/bai-viet">Bài viết</a>
    <a href="/gio-hang">Giỏ hàng</a>
    <a href="/lien-he">Liên hệ</a>
</nav>

<main>
    {{ $slot }}
</main>

<footer>
    import { ShoppingBag, Mail, Phone, MapPin, Facebook, Instagram, Youtube } from 'lucide-react';

export default function Footer() {
  return (
    <footer className="bg-primary text-primary-foreground mt-auto">
      {/* Main Footer */}
      <div className="max-w-7xl mx-auto px-4 py-12">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Company Info */}
          <div>
            <div className="flex items-center gap-2 mb-4">
              <ShoppingBag className="w-6 h-6" />
              <h3>ShopViet</h3>
            </div>
            <p className="text-primary-foreground/80 text-sm mb-4">
              Cửa hàng trực tuyến uy tín, chất lượng hàng đầu Việt Nam. Cam kết sản phẩm chính hãng 100%.
            </p>
            <div className="flex gap-3">
              <a href="#" className="w-9 h-9 bg-primary-foreground/10 hover:bg-primary-foreground/20 rounded-full flex items-center justify-center transition-colors">
                <Facebook className="w-4 h-4" />
              </a>
              <a href="#" className="w-9 h-9 bg-primary-foreground/10 hover:bg-primary-foreground/20 rounded-full flex items-center justify-center transition-colors">
                <Instagram className="w-4 h-4" />
              </a>
              <a href="#" className="w-9 h-9 bg-primary-foreground/10 hover:bg-primary-foreground/20 rounded-full flex items-center justify-center transition-colors">
                <Youtube className="w-4 h-4" />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="mb-4">Liên kết nhanh</h4>
            <ul className="space-y-2 text-sm text-primary-foreground/80">
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Giới thiệu</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Sản phẩm mới</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Khuyến mãi</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Tin tức</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Tuyển dụng</a></li>
            </ul>
          </div>

          {/* Customer Service */}
          <div>
            <h4 className="mb-4">Chăm sóc khách hàng</h4>
            <ul className="space-y-2 text-sm text-primary-foreground/80">
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Hướng dẫn mua hàng</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Chính sách đổi trả</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Bảo hành</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Vận chuyển</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Câu hỏi thường gặp</a></li>
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h4 className="mb-4">Liên hệ</h4>
            <ul className="space-y-3 text-sm text-primary-foreground/80">
              <li className="flex items-start gap-2">
                <MapPin className="w-4 h-4 mt-0.5 flex-shrink-0" />
                <span>123 Đường ABC, Quận 1, TP. Hồ Chí Minh</span>
              </li>
              <li className="flex items-center gap-2">
                <Phone className="w-4 h-4 flex-shrink-0" />
                <span>1900 1234</span>
              </li>
              <li className="flex items-center gap-2">
                <Mail className="w-4 h-4 flex-shrink-0" />
                <span>support@shopviet.vn</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      {/* Bottom Footer */}
      <div className="border-t border-primary-foreground/10">
        <div className="max-w-7xl mx-auto px-4 py-6">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-primary-foreground/60">
            <p>© 2026 ShopViet. Tất cả quyền được bảo lưu.</p>
            <div className="flex gap-6">
              <a href="#" className="hover:text-primary-foreground transition-colors">Điều khoản sử dụng</a>
              <a href="#" className="hover:text-primary-foreground transition-colors">Chính sách bảo mật</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
}

</footer>

</body>
</html>