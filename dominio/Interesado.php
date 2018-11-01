
<?php 

class Interesado {

	public $codigo;
	public $nome;
	public $cpf;
	
	public function pegarDados(){
		
		$this->nome = $_GET["nome"];
		$this->cpf = $_GET["cpf"];
	}
	
	public function validarDados(){
	}

}

?>