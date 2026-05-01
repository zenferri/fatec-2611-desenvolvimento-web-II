<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações básicas da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4</h1>
    <h2>Digite um número de 1 a 7 para descobrir o dia da semana correspondente usando <code>switch</code>.</h2>

    <!-- Formulário para enviar o número digitado -->
    <form id="ex04" name="ex04" action="ex04_resultado.php" method="post">
        <label for="numero">Número de 1 a 7:</label>
        <input type="number" id="numero" name="numero" min="1" max="7" required>

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
