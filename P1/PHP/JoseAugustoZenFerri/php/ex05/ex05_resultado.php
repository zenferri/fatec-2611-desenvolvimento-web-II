<?php
// Aqui vou guardar os números primos encontrados.
$numerosPrimos = [];

// Percorre todos os números de 0 até 50.
for ($numero = 0; $numero <= 50; $numero++) {
    // Números menores que 2 não são primos.
    if ($numero < 2) {
        continue;
    }

    $ehPrimo = true;

    // Testa se o número tem algum divisor além de 1 e dele mesmo.
    for ($divisor = 2; $divisor < $numero; $divisor++) {
        if ($numero % $divisor === 0) {
            $ehPrimo = false;
            break;
        }
    }

    // Se continuar verdadeiro, o número é primo.
    if ($ehPrimo) {
        $numerosPrimos[] = $numero;
    }
}

// Conta quantos primos foram encontrados.
$quantidadePrimos = count($numerosPrimos);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações básicas da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5</h1>
    <h2>Relação dos números primos encontrados entre 0 e 50.</h2>

    <!-- Mostra a quantidade e a lista final -->
    <p><strong>Quantidade total de números primos:</strong> <?= htmlspecialchars((string) $quantidadePrimos, ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Números primos identificados:</strong> <?= htmlspecialchars(implode(", ", $numerosPrimos), ENT_QUOTES, 'UTF-8'); ?></p>

    <!-- Links para voltar -->
    <p><a href="ex05.php"><i class="fa-solid fa-arrow-left"></i> Voltar Exercício</a></p>
    <p><a href="../index.php"><i class="fa-solid fa-house"></i> Voltar Menu</a></p>
</body>
</html>
