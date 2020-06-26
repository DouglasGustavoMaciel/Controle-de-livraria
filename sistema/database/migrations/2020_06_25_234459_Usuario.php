<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            
            $table->timestamps();
			$table->string('Nome')->nullable();
			$table->string('Genero')->nullable();
			$table->date('Data de nascimento')->nullable();
			$table->string('Endereco')->nullable();
			$table->bigIncrements('CPF');
			$table->integer('Telefone')->nullable();
			$table->text('Email')->nullable();
			$table->date('Data de admissao')->nullable();
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
        Schema::dropIfExists('Usuario');
    }
}
