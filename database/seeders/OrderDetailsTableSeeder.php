<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class OrderDetailsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'price' => 30.00,
                'total_price' => 60.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'price' => 25.50,
                'total_price' => 25.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 3,
                'product_id' => 3,
                'quantity' => 3,
                'price' => 20.25,
                'total_price' => 60.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 4,
                'product_id' => 4,
                'quantity' => 2,
                'price' => 15.75,
                'total_price' => 31.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 5,
                'product_id' => 5,
                'quantity' => 1,
                'price' => 18.10,
                'total_price' => 18.10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
