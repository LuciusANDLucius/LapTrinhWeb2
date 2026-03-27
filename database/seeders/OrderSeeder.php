<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    for ($i = 1; $i <= 10; $i++) {
        DB::table('order')->insert([
            'user_id' => 1,
            'name' => 'Khách ' . $i,
            'phone' => '09000000' . $i,
            'email' => 'khach'.$i.'@gmail.com',
            'address' => 'TP.HCM',
            'status' => 1,
            'created_at' => now(),
        ]);
    }
}
}
