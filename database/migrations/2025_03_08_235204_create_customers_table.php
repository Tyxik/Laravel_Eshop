<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Jméno zákazníka
            $table->string('email')->unique(); // Email (unikátní)
            $table->text('address')->nullable(); // Adresa (může být prázdná)
            $table->string('phoneNumber')->nullable(); // Telefonní číslo (může být prázdné)
            $table->float('discount')->default(0); // Sleva (výchozí hodnota 0)
            $table->timestamps(); // Vytvoření timestampů (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};