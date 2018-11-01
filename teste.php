
<?php

require_once("persistencia/InteressadoDAO.php");
require_once("dominio/Interessado.php");

$banco = new InteressadoDAO;
$interessado = new Interessado;

$interessado->pegarDados();
$interessado->validarDados();



$banco->inserir($interessado);

foreach ($banco->selecionarTodos() as $registro) {
	echo "Codigo : ". $registro["codigo"] . " | Nome : ". $registro["nome"] ." | CPF : ". $registro["cpf"] ." <br /> ";
};



?>