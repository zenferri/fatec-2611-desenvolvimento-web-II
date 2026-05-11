<?php

/**
 * Ponto de entrada do formulário de IMC: sessão + exibição da view via controller.
 */
session_start();

require_once "Controllers/IMCController.class.php";

$obj = new IMCController(); // cria uma instância da classe IMCController
$obj->formulario(); // chama o método formulario da classe IMCController
