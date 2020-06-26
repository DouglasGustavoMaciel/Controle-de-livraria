<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Livros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Livros', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('Nome')->nullable();
			$table->integer('Genero literario')->nullable();
			$table->string('Autores')->nullable();
			$table->string('Sinopse')->nullable();
			$table->string('Editora')->nullable();
			$table->date('Data de publicacao')->nullable();
			$table->float('Preco')->nullable();
			$table->integer('Tipo do livro')->nullable();
			$table->integer('Idioma')->nullable();
			$table->integer('Quantidade em estoque')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Livros');
    }
}
