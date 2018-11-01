<?php

require_once("DBMySQL.php");


class GrupoDeEstudosDAO extends DBMySQL {

	public function inserir($grupoDeEstudos){	
		$this->query("INSERT INTO grupos_de_estudos (onde,assunto,quando,tempo_de_duracao,quantidade_de_pessoas) VALUES ('".$grupoDeEstudos->onde."','".$grupoDeEstudos->assunto."','".$grupoDeEstudos->quando."','".$grupoDeEstudos->tempoDuracao."','".$grupoDeEstudos->quntidadePessoas."');" );
	}
	
	public function selecionarTodos(){
		return $this->select("SELECT codigo,onde,assunto,quando,tempo_de_duracao,quantidade_de_pessoas FROM grupos_de_estudos;");
	}

}

?>