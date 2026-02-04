<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jadwal_pelajarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_pelajaran');
            $table->index('id_pelajaran', 'idx_pelajarans_id_jadwal_pelajarans');
            $table->uuid('id_jadwal');
            $table->index('id_jadwal', 'idx_jadwals_id_jadwal_pelajarans');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelajarans');
    }
};
