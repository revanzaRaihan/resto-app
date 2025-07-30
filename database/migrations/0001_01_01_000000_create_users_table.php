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
        Schema::create('users', function (Blueprint $buatKolom) {
            $buatKolom->id();
            $buatKolom->unsignedBigInteger('role_id'); // Foreign key to roles table

            $buatKolom->string('username')->unique()->fillable();
            $buatKolom->string('password')->nullable();
            $buatKolom->string('fullname');
            $buatKolom->string('email')->unique()->fillable();
            $buatKolom->string('phone')->nullable();
            $buatKolom->softDeletes();
            $buatKolom->timestamps();

            $buatKolom->foreign('role_id')->references('id')->on('roles');
        });

        Schema::create('password_reset_tokens', function (Blueprint $buatKolom) {
            $buatKolom->string('email')->primary();
            $buatKolom->string('token');
            $buatKolom->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $buatKolom) {
            $buatKolom->string('id')->primary();
            $buatKolom->foreignId('user_id')->nullable()->index();
            $buatKolom->string('ip_address', 45)->nullable();
            $buatKolom->text('user_agent')->nullable();
            $buatKolom->longText('payload');
            $buatKolom->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
