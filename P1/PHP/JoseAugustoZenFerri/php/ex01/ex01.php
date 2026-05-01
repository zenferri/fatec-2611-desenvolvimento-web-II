<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações básicas da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <h2>Informe um ano inteiro para verificar se ele é ou não bissexto.</h2>

    <!-- Formulário que envia o ano para a página de resultado -->
    <form id="ex01" name="ex01" action="ex01_resultado.php" method="post">
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required>

        <div>
            <!-- Botões do formulário -->
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>

    <!-- Link para voltar ao menu principal -->
    <p><a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Voltar Menu</a></p>
</body>
</html>
