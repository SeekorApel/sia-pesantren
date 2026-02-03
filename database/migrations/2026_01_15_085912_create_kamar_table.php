<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_asrama');
            $table->index('id_asrama', 'idx_kamars_id_asramas');
            $table->uuid('id_pengurus');
            $table->index('id_pengurus', 'idx_kamars_id_pengurus');
            $table->string('nama')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
