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
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kelas');
            $table->string('jurusan');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tanggal_pembuatan');
            $table->decimal('saldo', 15, 2);
            $table->enum('status', ['aktif', 'non-aktif']);
            $table->string('rekening');
            $table->string('nis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasabahs');
    }
};
