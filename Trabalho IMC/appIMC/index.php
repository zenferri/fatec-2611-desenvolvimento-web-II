<?php

/**
 * Ponto de entrada: ao abrir a pasta appIMC no navegador, começa pela splash.
 * Rotas: ?route=splash | imc | calcular (POST)
 */
declare(strict_types=1);

session_start();

$config = require __DIR__ . '/config.php';
require __DIR__ . '/app/IMC.php';
require __DIR__ . '/app/IMCController.php';

$route = isset($_GET['route']) ? (string) $_GET['route'] : 'splash';

$controller = new IMCController($config);

switch ($route) {
    case 'imc':
        $controller->imc();
        break;
    case 'calcular':
        $controller->calcular();
        break;
    case 'splash':
    default:
        $controller->splash();
        break;
}
