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
        Schema::create('order_items', function (Blueprint $buatKolom) {
            $buatKolom->id();
            $buatKolom->unsignedBigInteger('order_id'); // Foreign key to orders table
            $buatKolom->unsignedBigInteger('item_id'); // Foreign key to items table

            $buatKolom->integer('quantity');
            $buatKolom->decimal('price', 10, 2);
            $buatKolom->decimal('tax', 10, 2);
            $buatKolom->decimal('total_price', 10, 2);
            $buatKolom->softDeletes();
            $buatKolom->timestamps();

            $buatKolom->foreign('order_id')->references('id')->on('orders');
            $buatKolom->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
