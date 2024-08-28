<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // criar a tabela
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome' , 80)->nullable(false); // STRING = VARCHAR e dps da , é o tamanho e dps o 'não nulo'
            $table->string('email' , 100)->nullable(false)->unique(); //adicionamos o UNIQUE
            $table->string('password')->nullable(false); // não indica o tamanho dos caracteres dps da senha
            $table->timestamps(); // cria 2 campos na tabela
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // excluir tabela
    {
        Schema::dropIfExists('usuarios');
    }
};
