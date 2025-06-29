<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('joki_id')->nullable();
            $table->string('game');
            $table->text('deskripsi')->nullable();
            $table->enum('status', ['menunggu_pembayaran', 'menunggu_konfirmasi', 'diproses', 'selesai', 'ditolak'])->default('menunggu_pembayaran');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamp('waktu_selesai')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('joki_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
}; 