<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kelas_madrasahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_tingkat_kelas');
            $table->index('id_tingkat_kelas', 'idx_tingkat_kelas_id_kelas_madrasahs');
            $table->uuid('id_pengurus');
            $table->index('id_pengurus', 'idx_pengurus_id_kelas_madrasahs');
            $table->string('nama')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas_madrasahs');
    }
};
