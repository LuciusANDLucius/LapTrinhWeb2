<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('topic')->insert([
                'name' => 'Chủ đề ' . $i,
                'slug' => 'chu-de-' . $i,
                'status' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
