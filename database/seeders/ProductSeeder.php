<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Example image paths, you can upload your images manually or programmatically
        $images = [
            'blue_dream_1.jpg',
            'blue_dream_2.jpg',
            'vape_pen_1.jpg',
            'gummies_1.jpg',
            'gummies_2.jpg'
        ];

        // Loop through the products to insert
        DB::table('products')->insert([
            [
                'name' => 'HHC Květ Blue Dream',
                'description' => 'Prémiový květ s vysokým obsahem HHC.',
                'price' => 890,
                'sku' => 'HHC-BD-001',
                'in_stock' => 50,
                'images' => json_encode($this->generateImages($images, 'blue_dream')),
            ],
            [
                'name' => 'HHC Vape Pen',
                'description' => 'Jednorázové HHC pero s příchutí mango.',
                'price' => 1290,
                'sku' => 'HHC-VP-002',
                'in_stock' => 30,
                'images' => json_encode($this->generateImages($images, 'vape_pen')),
            ],
            [
                'name' => 'HHC Gummies',
                'description' => 'Ovocné želé s 25 mg HHC na kus.',
                'price' => 590,
                'sku' => 'HHC-GM-003',
                'in_stock' => 100,
                'images' => json_encode($this->generateImages($images, 'gummies')),
            ],
        ]);
    }

    /**
     * Generate a dynamic image name and return the array of images.
     *
     * @param array $images
     * @param string $prefix
     * @return array
     */
    private function generateImages(array $images, string $prefix): array
    {
        $generatedImages = [];
        foreach ($images as $image) {
            // Generate random name for each image
            $randomName = $prefix . '_' . Str::random(10) . '.' . pathinfo($image, PATHINFO_EXTENSION);

            // Here, you can move the image to a specific folder (gallery) using storage
            Storage::disk('public')->putFileAs('gallery', storage_path('app/public/' . $image), $randomName);

            // Push the new image path to the array
            $generatedImages[] = 'gallery/' . $randomName;
        }

        return $generatedImages;
    }
}
