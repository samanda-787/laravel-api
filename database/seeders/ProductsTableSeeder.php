<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'MacBook Pro 16"',
                'price' => 2399.99,
                'description' => 'Apple M1 Pro chip, 16GB RAM, 512GB SSD',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'iPhone 14 Pro',
                'price' => 999.00,
                'description' => '6.1-inch Super Retina XDR display, A16 Bionic',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Samsung Galaxy S23',
                'price' => 799.99,
                'description' => '6.1-inch Dynamic AMOLED, Snapdragon 8 Gen 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Sony WH-1000XM5',
                'price' => 399.99,
                'description' => 'Noise cancelling wireless headphones',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Dell XPS 15',
                'price' => 1499.99,
                'description' => '15.6" 4K UHD, Intel Core i7, 16GB RAM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Apple Watch Series 8',
                'price' => 399.00,
                'description' => 'GPS + Cellular, 45mm, Midnight',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Bose QuietComfort 45',
                'price' => 329.00,
                'description' => 'Wireless noise cancelling headphones',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Logitech MX Master 3',
                'price' => 99.99,
                'description' => 'Advanced wireless mouse for creators',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'Samsung 4K Smart TV',
                'price' => 899.99,
                'description' => '55-inch QLED, 4K UHD, Smart TV',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'PlayStation 5',
                'price' => 499.99,
                'description' => 'Ultra-high speed SSD, 4K graphics',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('products')->insert($products);
    }
}