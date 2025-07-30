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
        Schema::create('orders', function (Blueprint $buatKolom) {
            $buatKolom->id();
            $buatKolom->unsignedBigInteger('user_id'); // Foreign key to users table

            $buatKolom->string('order_code')->unique();
            $buatKolom->decimal('subtotal', 10, 2);
            $buatKolom->decimal('tax', 10, 2);
            $buatKolom->decimal('grand_total ', 10, 2);
            $buatKolom->enum('status', ['pending', 'settlement', 'cooked']);
            $buatKolom->integer('table_number');
            $buatKolom->enum('payment_method', ['tunai', 'qris']);
            $buatKolom->text('note')->nullable();
            $buatKolom->softDeletes();
            $buatKolom->timestamps();

            $buatKolom->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
