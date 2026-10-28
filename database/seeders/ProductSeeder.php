<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Mechanical Keyboard (RGB Blue Switches)',
            'sku' => 'TECH-KB-001',
            'category' => 'Peripherals',
            'price' => 2499.00,
            'stock' => 15,
            'description' => 'Tactile clicky keys for fast typing.',
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Ergonomic Vertical Mouse',
            'sku' => 'TECH-MS-002',
            'category' => 'Peripherals',
            'price' => 1250.50,
            'stock' => 28,
            'description' => 'Reduces wrist strain during long sessions.',
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'USB-C Multiport Dock',
            'sku' => 'TECH-HUB-004',
            'category' => 'Accessories',
            'price' => 3100.00,
            'stock' => 0,
            'description' => 'HDMI 4K, Gigabit Ethernet, and USB ports.',
            'is_available' => false,
        ]);
    }
}