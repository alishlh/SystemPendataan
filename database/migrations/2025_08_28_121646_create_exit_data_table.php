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
        Schema::create('exit_data', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('agen_id')->nullable(); // opsional, jika ingin mengaitkan dengan agen
            $table->unsignedInteger('grub_id'); // langsung ke bus_grub
            $table->string('kode_booking')->unique();
            $table->string('nama');
            $table->string('no_passport');
            $table->enum('status_pembayaran', ['lunas', 'dp', 'belum']);
            $table->decimal('nominal_pembayaran', 15, 2)->default(0);
            $table->integer('seat_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exit_data');
    }
};
