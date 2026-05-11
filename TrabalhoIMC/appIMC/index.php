<?php

/**
 * Front controller: inicia sessão, despacha por query string (controle/método) ou splash padrão.
 * Ex.: index.php?controle=IMCController&metodo=calcular
 */
session_start();

if ($_GET) {
    $controle = $_GET["controle"] ?? "IMCController"; // pega o controle da url
    $metodo = $_GET["metodo"] ?? "splashscreen"; // pega o metodo da url

    require_once "Controllers/{$controle}.class.php"; // carrega o controle
    $obj = new $controle(); // cria uma instância do controle
    $obj->$metodo(); // chama o metodo do controle
} else {
    require_once "Controllers/IMCController.class.php"; // carrega o controle

    $obj = new IMCController(); // cria uma instância do controle
    $obj->splashscreen(); // chama o metodo splashscreen do controle
}
