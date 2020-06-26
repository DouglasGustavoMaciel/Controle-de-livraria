<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuário extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuário', function (Blueprint $table) {
            
            $table->timestamps();
			$table->string('Nome')->nullable();
			$table->integer('Genero')->nullable();
			$table->date('Data de nascimento')->nullable();
			$table->string('Endereço')->nullable();
			$table->bigIncrements('CPF');
			$table->string('Telefone')->nullable();
			$table->string('Email')->nullable();
			$table->date('Data de Admissão')->nullable();
			$table->integer('Cargo')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuário');
    }
}
