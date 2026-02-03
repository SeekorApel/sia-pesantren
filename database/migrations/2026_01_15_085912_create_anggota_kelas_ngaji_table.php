<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('anggota_kelas_ngajis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_kelas_ngaji');
            $table->index('id_kelas_ngaji', 'idx_kelas_ngajis_id_anggota_kelas_ngajis');
            $table->uuid('id_santri');
            $table->index('id_santri', 'idx_santris_id_anggota_kelas_ngajis');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggota_kelas_ngajis');
    }
};
