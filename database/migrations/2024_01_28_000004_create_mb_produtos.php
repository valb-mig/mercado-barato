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
        Schema::create('mb_produtos', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_lote');
            $table->unsignedBigInteger('id_setor');
            $table->foreign('id_setor')->references('id')->on('mb_setores');
            $table->string('produto_nome');
            $table->float('produto_preco', 8, 2);
            $table->longText('produto_base64');
            $table->integer('produto_desconto')->default(0);
            $table->integer('produto_qtd')->default(0);
            $table->dateTime('produto_validade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mb_produtos');
    }
};
