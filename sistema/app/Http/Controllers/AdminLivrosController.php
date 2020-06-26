<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminLivrosController extends CBController {


    public function cbInit()
    {
        $this->setTable("Livros");
        $this->setPermalink("livros");
        $this->setPageTitle("Livros");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Nome","Nome")->strLimit(150)->maxLength(255);
		$this->addRadio("Genero Literario","Genero literario")->options([1=>'Drama',2=>'Terror',3=>'Ação',4=>'Ficção',5=>'Literatura Clássica',6=>'Literatura Juvenil',7=>'Biografia',8=>'Autobiografia',9=>'Romance',10=>'Literatura Gospel',11=>'Literatura Financeira',12=>'Literatura Matemática',13=>'Suspense',14=>'Guerra',15=>'Literatura Acadêmica',16=>'Novela',17=>'Crônica',18=>'Poesia',19=>'Clássicos',20=>'Adulto']);
		$this->addText("Autor","Autores")->strLimit(150)->maxLength(255);
		$this->addTextArea("Sinopse","Sinopse")->strLimit(150);
		$this->addText("Editora","Editora")->strLimit(150)->maxLength(255);
		$this->addDate("Data De Publicacao","Data de publicacao");
		$this->addMoney("Preco","Preco")->prefix('R$')->precision('2')->thousandSeparator('.')->decimalSeparator(',');
		$this->addRadio("Tipo Do Livro","Tipo do livro")->options([1=>'Novo',2=>'Usado']);
		$this->addRadio("Idioma","Idioma")->options([1=>'Português',2=>'Ingles',3=>'Espanhol',4=>'Alemão',5=>'Russo']);
		$this->addNumber("Quantidade Em Estoque","Quantidade em estoque");
		

    }
}
