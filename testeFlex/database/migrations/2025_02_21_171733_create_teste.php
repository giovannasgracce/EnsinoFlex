<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //criar a tabela do banco de dados
    {
        Schema::create('teste', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->text('telefone');
            $table->integer('cpf'); 
            $table->text('email');
            $table->text('senha');
            $table->timestamps(); // ver o horario e data 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // se já existir apague a tabela registro e utiliza essa
    {
        Schema::dropIfExists('teste');
    }
};
