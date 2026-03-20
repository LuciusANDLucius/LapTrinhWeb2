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
            DB::table('product')->insert([
                'name' => 'Sản phẩm ' . $i,
                'slug' => Str::slug('Sản phẩm ' . $i),
                'category_id' => rand(1,5),
                'brand_id' => rand(1,5),
                'price' => rand(100000, 10000000),
                'price_sale' => rand(100000, 9000000),
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