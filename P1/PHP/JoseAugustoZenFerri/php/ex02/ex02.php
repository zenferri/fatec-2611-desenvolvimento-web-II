<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações básicas da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <h2>Informe uma temperatura em graus Celsius para converter o valor para Fahrenheit.</h2>

    <!-- Formulário que manda a temperatura para o resultado -->
    <form id="ex02" name="ex02" action="ex02_resultado.php" method="post">
        <label for="celsius">Temperatura em Celsius:</label>
        <input type="number" id="celsius" name="celsius" step="0.01" required>

        <div>
            <!-- Botões do formulário -->
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>

    <!-- Link para voltar ao menu -->
    <p><a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Voltar Menu</a></p>
</body>
</html>
