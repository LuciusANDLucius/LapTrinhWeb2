# Laravel Database Project

## Cài đặt

```bash
composer install
cp .env.example .env
php artisan key:generate
```

## Tạo database

```bash
php artisan migrate
php artisan db:seed
```

## Mô tả

* 11 bảng: banner, brand, category, contact, menu, order, orderdetail, post, product, topic, user
* Có migration + seeder đầy đủ
* https://github.com/LuciusANDLucius/LapTrinhWeb2