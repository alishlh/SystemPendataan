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
        Schema::create('grubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_grub');
            $table->date('tanggal_keberangkatan');
            $table->string('lokasi_keberangkatan');
            $table->integer('seats_available'); // Kursi tersisa untuk bus ini di jadwal ini
            $table->integer('seats_booked')->default(0); // Kursi yang sudah diisi di bus ini
            $table->enum('status', ['cancel', 'proses', 'done'])->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grubs');
    }
};
