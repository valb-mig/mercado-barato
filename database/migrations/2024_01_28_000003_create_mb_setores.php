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
        Schema::create('mb_setores', function (Blueprint $table) {
            $table->id('id');
            $table->string('setor_nome');
            $table->integer('setor_gestor');
            $table->string('setor_icone');
            $table->integer('setor_capacidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mb_setores');
    }
};
