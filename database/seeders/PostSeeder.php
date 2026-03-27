<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    for ($i = 1; $i <= 10; $i++) {
        DB::table('menu')->insert([
            [
                'name' => 'Trang chủ',
                'link' => '/',
                'type' => 'link',
                'status' => 1
            ],
            [
                'name' => 'Sản phẩm',
                'link' => '/san-pham',
                'type' => 'link',
                'status' => 1
            ],
            [
                'name' => 'Liên hệ',
                'link' => '/lien-he',
                'type' => 'link',
                'status' => 1
            ],
        ]);
        
    }
}
}
