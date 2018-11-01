<?php

require_once("DBMySQL.php");
require_once("../negocio/dominio/Interesado.php");

class InteresadoDAO extends DBMySQL {

	public function inserir($interesado){	
		$this->query("INSERT INTO interesados (nome,cpf) VALUES ('".$interesado->nome."','".$interesado->cpf."');" );
	}
	
	public function selecionarTodos(){
		return $this->select("SELECT codigo, nome, cpf FROM interesados;");
	}

}

?>