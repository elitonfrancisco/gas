
<?php 

class GrupoDeEstudos {

	public $codigo;
	public $onde;
	public $quando;
	public $quntidadePessoas;
	public $tempoDuracao;
	public $assunto;
	
	public function pegarDados(){
		
		$this->onde = $_GET["onde"];
		$this->quando = $_GET["quando"];
		$this->quntidadePessoas = $_GET["quntidadePessoas"];
		$this->tempoDuracao = $_GET["tempoDuracao"];
		$this->assunto = $_GET["assunto"];
	}
	
	public function validarDados(){
	}

}

?>