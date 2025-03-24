<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'HHC Květ Blue Dream',
                'description' => 'Prémiový květ s vysokým obsahem HHC.',
                'price' => 890,
                'sku' => 'HHC-BD-001',
                'in_stock' => 50,
                'images' => json_encode(['blue_dream_1.jpg', 'blue_dream_2.jpg']),
            ],
            [
                'name' => 'HHC Vape Pen',
                'description' => 'Jednorázové HHC pero s příchutí mango.',
                'price' => 1290,
                'sku' => 'HHC-VP-002',
                'in_stock' => 30,
                'images' => json_encode(['vape_pen_1.jpg']),
            ],
            [
                'name' => 'HHC Gummies',
                'description' => 'Ovocné želé s 25 mg HHC na kus.',
                'price' => 590,
                'sku' => 'HHC-GM-003',
                'in_stock' => 100,
                'images' => json_encode(['gummies_1.jpg', 'gummies_2.jpg']),
            ],
        ]);
    }
}
