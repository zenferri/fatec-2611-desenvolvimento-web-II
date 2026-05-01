<?php

// Inicia a sessão para recuperar a mensagem calculada em ex02_resultado.php.
session_start();

// Lê a resposta salva na sessão; se não existir, mantém string vazia.
$resposta = $_SESSION["resposta_ex02"] ?? "";

// Remove a mensagem após a leitura para não reaparecer em um novo acesso.
unset($_SESSION["resposta_ex02"]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Configurações básicas da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivo de estilos compartilhado pelo exercício -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title>Exercício 2 - PHP</title>
</head>

<body>
    <h1>Exercício 2 - PHP</h1>
    <h2>Leia 2 números. Exiba a soma, subtração, multiplicação e divisão.</h2>

    <!-- Formulário: recebe os 2 números e envia os dados para ex02_resultado.php -->

    <form id="ex02" name="ex02" action="ex02_resultado.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1">
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2">
        <div>

            <!-- submit envia o formulário; reset limpa os campos no navegador -->

            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">

        </div>

        <!-- Exibe a frase final logo abaixo dos botões, quando houver retorno do processamento -->

        <?php if ($resposta !== ""): ?>

            <p><?php echo $resposta; ?></p>

        <?php endif; ?>

    </form>
    <br>

    <!-- Link de retorno ao menu principal -->
    <p><a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Voltar Menu</a></p>
</body>

</html>