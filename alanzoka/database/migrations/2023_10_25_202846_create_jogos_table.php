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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_jogo',100);
            $table->string('tipo_jogo',100);
            $table->string('categ_jogo',100);
            $table->double('dur_i',10, 2)->nullable();
            $table->double('dur_f',10, 2)->nullable();
            $table->date('data_i')->nullable();
            $table->date('data_f')->nullable();
            $table->string('obs_jogo',100)->nullable();
            $table->string('status_jogo',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};
