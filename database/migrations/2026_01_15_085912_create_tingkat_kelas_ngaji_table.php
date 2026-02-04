<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tingkat_kelas_ngajis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_kategori_ngaji');
            $table->index('id_kategori_ngaji', 'idx_kategori_ngaji_id_tingkat_kelas_ngajis');
            $table->string('nama')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tingkat_kelas_ngajis');
    }
};
