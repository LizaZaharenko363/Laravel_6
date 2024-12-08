<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Test Kittu',
            'description' => 'This is a seeder kitty.',
            'price' => 999.99,
            'image_url' => 'https://i.pinimg.com/736x/34/00/41/3400411e428438a60596f73f96defda8.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
