<?php
// Pega a temperatura digitada.
$celsiusTexto = trim((string) ($_POST["celsius"] ?? ""));

// Troca vírgula por ponto para facilitar a conta.
$celsiusNormalizado = str_replace(",", ".", $celsiusTexto);
$celsiusValido = filter_var($celsiusNormalizado, FILTER_VALIDATE_FLOAT);
$fahrenheit = null;
$mensagemErro = "";

// Verifica se o valor informado é um número.
if ($celsiusTexto === "" || $celsiusValido === false) {
    $mensagemErro = "Valor inválido. Informe uma temperatura numérica em Celsius.";
} else {
    $celsius = (float) $celsiusValido;

    // Fórmula pedida no exercício.
    $fahrenheit = ($celsius * 9 / 5) + 32;
}
?>
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
    <h2>Resultado da conversão de temperatura.</h2>

    <!-- Se tiver erro, mostra aviso. Se não, mostra a conversão -->
    <?php if ($mensagemErro !== ""): ?>
        <p><strong>Aviso:</strong> <?= htmlspecialchars($mensagemErro, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php else: ?>
        <p><strong>Celsius:</strong> <?= htmlspecialchars(number_format($celsius, 2, ',', '.'), ENT_QUOTES, 'UTF-8'); ?> &deg;C</p>
        <p><strong>Fahrenheit:</strong> <?= htmlspecialchars(number_format($fahrenheit, 2, ',', '.'), ENT_QUOTES, 'UTF-8'); ?> &deg;F</p>
    <?php endif; ?>

    <!-- Links para voltar -->
    <p><a href="ex02.php"><i class="fa-solid fa-arrow-left"></i> Voltar Exercício</a></p>
    <p><a href="../index.php"><i class="fa-solid fa-house"></i> Voltar Menu</a></p>
</body>
</html>
