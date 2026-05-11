<?php

/**
 * Página de resultados: exige sessão preenchida em calcular(); senão o controller redireciona.
 */
session_start(); // inicia a sessão

require_once "Controllers/IMCController.class.php";

$obj = new IMCController(); // cria uma instância da classe IMCController
$obj->resultado(); // chama o método resultado da classe IMCController


