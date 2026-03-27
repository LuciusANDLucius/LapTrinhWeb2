<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    for ($i = 1; $i <= 5; $i++) {
        DB::table('contact')->insert([
            'name' => 'User ' . $i,
            'email' => 'user'.$i.'@gmail.com',
            'title' => 'Tiêu đề ' . $i,
            'phone' => '09000000' . $i, 
            'content' => 'Nội dung liên hệ ' . $i,
            'status' => 0,
            'created_at' => now(),
        ]);
    }
}
}
