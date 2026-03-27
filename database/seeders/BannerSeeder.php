<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('banner')->insert([
                'name' => 'Banner ' . $i,
                'link' => 'https://localhost:8000/banner-' . $i,
                'position' => $i % 2 == 0 ? 'slideshow' : 'advertise',
                'image' => 'banner' . $i . '.png',
                'status' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
