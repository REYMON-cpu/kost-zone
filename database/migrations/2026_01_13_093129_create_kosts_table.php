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
        Schema::create('kosts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->string('nama_kost');
    $table->enum('tipe_kost',['campuran','putra','putri']);
    $table->integer('max_penghuni')->default(1);
    $table->string('kecamatan');
    $table->string('kabupaten');
    $table->string('kota');
    $table->text('spesifikasi');
    $table->enum('pembayaran',['bulanan','tahunan']);
    $table->integer('harga');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosts');
    }
};
