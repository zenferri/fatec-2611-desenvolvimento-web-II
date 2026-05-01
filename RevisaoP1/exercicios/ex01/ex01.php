<?php

/**
 * Exercício 1 — versão com envio pelo servidor.
 * O formulário envia os dados via POST para ex01_resultado.php 
 * (diferente do ex01.html, que usa JavaScript no cliente).
 */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Codificação, viewport e folha de estilos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title>Exercício 1</title>
</head>

<body>
    <h1>Exercício 1</h1>

    <!-- action: página PHP que processa o POST; method="post" evita dados na URL -->
    <form id="ex01" name="ex01" action="ex01_resultado.php" method="post">
        <label for="nomecompleto">Nome Completo: </label>
        <input type="text" id="nomecompleto" name="nomecompleto" />
        <label for="email">E-mail: </label>
        <input type="text" id="email" name="email" />
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" />
        <label for="idade">Idade: </label>
        <input type="text" id="idade" name="idade" />
        <div>
            <!-- submit envia o formulário; reset limpa os campos no navegador -->
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>
    <br>

    <!-- Retorno ao menu principal -->
    <p><a href="../index.php">
            <i class="fa-solid fa-arrow-left"></i> Voltar Menu</a>
    </p>
</body>

</html>