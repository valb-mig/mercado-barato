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
        Schema::create('mb_sys_users', function (Blueprint $table) {
            $table->id('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('grupo', [0, 1])->default(0); // 0 = Adm, 1 = Gestor
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mb_sys_users');
    }
};
