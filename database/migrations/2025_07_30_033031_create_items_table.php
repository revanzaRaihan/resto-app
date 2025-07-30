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
        Schema::create('items', function (Blueprint $buatKolom) {
            $buatKolom->id();
            $buatKolom->unsignedBigInteger('category_id'); // Foreign key to categories table

            $buatKolom->string('name')->unique();
            $buatKolom->text('description');
            $buatKolom->decimal('price', 10, 2);
            $buatKolom->string('image')->nullable();
            $buatKolom->boolean('is_active')->default(true);
            $buatKolom->timestamps();

            $buatKolom->foreign('category_id')->references('id')->on('categories'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
