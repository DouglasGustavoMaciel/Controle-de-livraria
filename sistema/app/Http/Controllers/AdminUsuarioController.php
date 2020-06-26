<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminUsuarioController extends CBController {


    public function cbInit()
    {
        $this->setTable("Usuario");
        $this->setPermalink("usuario");
        $this->setPageTitle("Usuario");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Nome","Nome")->strLimit(150)->maxLength(255);
		$this->addRadio("Genero","Genero")->options([1=>'Masculino',2=>'Feminimo',3=>'Não identificado']);
		$this->addDate("Data De Nascimento","Data de nascimento")->format('d-m-Y');
		$this->addText("Endereco","Endereco")->strLimit(150)->maxLength(255);
		$this->addNumber("Telefone","Telefone");
		$this->addEmail("Email","Email");
		$this->addDate("Data De Admissao","Data de admissao")->format('d-m-Y');
		$this->addRadio("Cargo","Cargo")->options([1=>'Administrador',2=>'Gerente',3=>'Operador de Logística',4=>'Furncioário']);
		

    }
}
