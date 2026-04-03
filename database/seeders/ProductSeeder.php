<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    public function run(): void
{
    for ($i = 1; $i <= 20; $i++) {
        // 1. Tạo giá gốc trước
        $price = rand(100000, 10000000);

        // 2. Tạo giá sale ngẫu nhiên từ 0 đến (giá gốc - 1)
        // Nếu bạn muốn thỉnh thoảng không có sale (giá sale = 0)
        $price_sale = rand(0, $price - 1000); // Trừ 1000 để đảm bảo sale thấp hơn hẳn giá gốc

        DB::table('product')->insert([
            'name' => 'Sản phẩm ' . $i,
            'slug' => Str::slug('Sản phẩm ' . $i),
            'category_id' => rand(1,5),
            'brand_id' => rand(1,5),
            'price' => $price,               // Dùng biến đã tính
            'price_sale' => $price_sale,     // Dùng biến đã tính
            'image' => 'product'.$i.'.jpg',
            'qty' => rand(1,50),
            'description' => 'Mô tả ' . $i,
            'created_by' => 1,
            'status' => 1,
            'created_at' => now(),
        ]);
    }
}
}