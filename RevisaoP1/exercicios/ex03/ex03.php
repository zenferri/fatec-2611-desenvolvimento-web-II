<!-- Leia base e altura do retângulo. Calcule e exiba a área e o
perímetro do retângulo. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex03 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Ex03 - PHP</h1>
    <h2>Leia base e altura do retângulo. Calcule e exiba a área e o perímetro do retângulo.</h2>
    <!-- Formulário: recebe base e altura do retângulo -->
    <form id="ex03" name="ex03" action="ex03_resultado.php" method="post">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base">
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura">
        <div>
            <!-- submit envia o formulário; reset limpa os campos no navegador -->
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>
    <br>
    <!-- Link de retorno ao menu principal -->
    <p><a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Voltar Menu</a></p>
</body>
</html>