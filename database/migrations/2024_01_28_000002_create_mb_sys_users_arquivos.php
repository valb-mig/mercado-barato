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
        Schema::create('mb_sys_users_arquivos', function (Blueprint $table) {
            $table->id('id');
            $table->string('arquivo_nome');
            $table->string('arquivo_tipo');
            $table->longText('arquivo_base64');
            $table->unsignedBigInteger('id_sys_user');
            $table->foreign('id_sys_user')->references('id')->on('mb_sys_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mb_sys_users_arquivos');
    }
};
