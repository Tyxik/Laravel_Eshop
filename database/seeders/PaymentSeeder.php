<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Naplní tabulku payments několika záznamy
        DB::table('payments')->insert([
            [
                'payment_method' => 'Credit Card',
                'amount' => 150.50,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_method' => 'PayPal',
                'amount' => 220.00,
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_method' => 'Bank Transfer',
                'amount' => 340.75,
                'status' => 'Failed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // přidejte další záznamy podle potřeby
        ]);
    }
}
