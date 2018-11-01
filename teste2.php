
<?php

require_once("persistencia/GrupoDeEstudosDAO.php");
require_once("dominio/GrupoDeEstudos.php");

$banco = new GrupoDeEstudosDAO;
$grupoDeEstudos = new GrupoDeEstudos;

$grupoDeEstudos->pegarDados();
$grupoDeEstudos->validarDados();



$banco->inserir($grupoDeEstudos);

foreach ($banco->selecionarTodos() as $registro) {
	echo "Codigo : ". $registro["codigo"] . " | Onde : ". $registro["onde"] ." | quando : ". $registro["quando"] ." | assunto : ". $registro["assunto"] ." | Quntida De Pessoas : ". $registro["quantidade_de_pessoas"] ." | Tempo Duracao : ". $registro["tempo_de_duracao"] ." <br /> ";
};



?>