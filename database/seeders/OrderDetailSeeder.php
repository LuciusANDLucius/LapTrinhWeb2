<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    for ($i = 1; $i <= 10; $i++) {
        DB::table('orderdetail')->insert([
            'order_id' => rand(1,10),
            'product_id' => rand(1,20),
            'price' => rand(100000, 5000000),
            'qty' => rand(1,5),
            'amount' => rand(100000, 5000000),
            
        ]);
    }
}
}
