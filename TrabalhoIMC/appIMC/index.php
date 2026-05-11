<?php

/**
 * Front controller: inicia sessão, despacha por query string (controle/método) ou splash padrão.
 * Ex.: index.php?controle=IMCController&metodo=calcular
 */
session_start();

if ($_GET) {
    $controle = $_GET["controle"] ?? "IMCController";
    $metodo = $_GET["metodo"] ?? "splashscreen";

    require_once "Controllers/{$controle}.class.php";
    $obj = new $controle();
    $obj->$metodo();
} else {
    require_once "Controllers/IMCController.class.php";

    $obj = new IMCController();
    $obj->splashscreen();
}
