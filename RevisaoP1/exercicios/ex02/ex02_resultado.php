<?php
// Inicia a sessão para poder guardar a resposta e reenviá-la ao formulário.
session_start();

// Recupera os 2 números enviados pelo formulário via POST.
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

// Realiza as 4 operações matemáticas com os valores recebidos.
$resultado = $numero1 + $numero2;
$resultado1 = $numero1 - $numero2;
$resultado2 = $numero1 * $numero2;
$resultado3 = $numero1 / $numero2;

// Salva a frase final em sessão para exibição em ex02.php.
$_SESSION["resposta_ex02"] = "Resultado da soma é $resultado, da subtração é $resultado1, da multiplicação é $resultado2 e da divisão é $resultado3.";

// Redireciona de volta para o formulário, onde a mensagem será exibida.
header("Location: ex02.php");
exit;

