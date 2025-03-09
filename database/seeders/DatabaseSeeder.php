<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //seeder an produkty staci napsat php artisan db:seed
        // User::factory(10)->create();
       // $products = \App\Models\Product::factory()->count(10)->create();
        
       
       //seeder na platby
        //$this->call([
        //    PaymentSeeder::class,
            
        //]);

        //seeder na objednavky
        $this->call([
            OrderSeeder::class,
            // přidejte další seedery
        ]);


        /*
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Ujistěte se, že heslo je hashed
        ]);
     */
    }
}
