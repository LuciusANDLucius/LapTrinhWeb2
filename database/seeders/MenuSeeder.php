<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            [
                'name' => 'Trang chủ',
                'link' => '/',
                'type' => 'link',
                'status' => 1,
                'created_at' => now(),
            ],
            [
                'name' => 'Sản phẩm',
                'link' => '/san-pham',
                'type' => 'link',
                'status' => 1,
                'created_at' => now(),
            ],
            [
                'name' => 'Liên hệ',
                'link' => '/lien-he',
                'type' => 'link',
                'status' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
