<?php

/**
 * Página de resultados: exige sessão preenchida em calcular(); senão o controller redireciona.
 */
session_start();

require_once "Controllers/IMCController.class.php";

$obj = new IMCController();
$obj->resultado();
