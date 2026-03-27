<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('category')->insert([
                'name' => 'Danh mục ' . $i,
                'slug' => 'danh-muc-' . $i,
                'status' => 1,
                'created_at' => now(),
            ]);
        }
    }
}