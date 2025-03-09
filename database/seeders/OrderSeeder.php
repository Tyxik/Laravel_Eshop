<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Naplní tabulku orders několika záznamy
        Order::create([
            'order_number' => 'ORD123456',
            'user_id' => 1, // Ujistěte se, že uživatel s ID 1 existuje
            'status' => 'Pending',
            'total_amount' => 499.99,
            'payment_method' => 'Credit Card',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Order::create([
            'order_number' => 'ORD123457',
            'user_id' => 2, // Ujistěte se, že uživatel s ID 2 existuje
            'status' => 'Completed',
            'total_amount' => 799.50,
            'payment_method' => 'PayPal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Order::create([
            'order_number' => 'ORD123458',
            'user_id' => 3, // Ujistěte se, že uživatel s ID 3 existuje
            'status' => 'Canceled',
            'total_amount' => 159.99,
            'payment_method' => 'Bank Transfer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Přidejte další objednávky dle potřeby
    }
}
