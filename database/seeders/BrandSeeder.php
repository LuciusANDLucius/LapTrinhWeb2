<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    for ($i = 1; $i <= 5; $i++) {
        DB::table('brand')->insert([
            'name' => 'Thương hiệu ' . $i,
            'slug' => 'thuong-hieu-' . $i,
            'status' => 1,
            'created_at' => now(),
        ]);
    }
}
}
