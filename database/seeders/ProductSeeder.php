<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan table products dulu
        Product::truncate();

        $products = [
            [
                'name' => 'Radio Vintage 1970',
                'description' => 'Radio vintage tahun 1970 dengan suara jernih dan desain klasik',
                'price' => 450000,
                'category' => 'Electronics',
                'image_url' => '/images/radio.jpg',
                'stock' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Telepon Rotary Classic',
                'description' => 'Telepon rotary jadul dengan dial putar, kondisi masih berfungsi sempurna',
                'price' => 320000,
                'category' => 'Electronics', 
                'image_url' => '/images/telepon.jpg',
                'stock' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Walkman Retro 80s',
                'description' => 'Walkman portable untuk memutar kaset, gaya tahun 80an yang iconic',
                'price' => 280000,
                'category' => 'Electronics',
                'image_url' => '/images/walkman.jpg',
                'stock' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'TV Tabung Vintage',
                'description' => 'Televisi tabung classic dengan gambar yang hangat dan nostalgic',
                'price' => 650000,
                'category' => 'Electronics',
                'image_url' => '/images/tv.jpg',
                'stock' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Jaket Denim 90s',
                'description' => 'Jaket denim vintage era 90an, bahan tebal dan berkualitas',
                'price' => 200000,
                'category' => 'Fashion',
                'image_url' => '/images/jaket.jpg',
                'stock' => 12,
                'is_active' => true,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
        
        $this->command->info('✅ Sample products created successfully!');
    }
}