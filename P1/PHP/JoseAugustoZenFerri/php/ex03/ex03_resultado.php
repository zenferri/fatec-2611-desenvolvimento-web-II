<?php
// Começa a contagem no número 1.
$contador = 1;
$resultado = [];

// Enquanto o contador for menor ou igual a 100, continua.
while ($contador <= 100) {
    $linha = (string) $contador;

    // Se for múltiplo de 5, adiciona a palavra PIN.
    if ($contador % 5 === 0) {
        $linha .= " - PIN";
    }

    // Guarda cada linha no vetor.
    $resultado[] = $linha;
    $contador++;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações básicas da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3</h1>
    <h2>Contagem progressiva de 1 até 100 com destaque para os múltiplos de 5.</h2>

    <!-- Mostra toda a contagem -->
    <p><strong>Resultado:</strong><br><?= nl2br(htmlspecialchars(implode(PHP_EOL, $resultado), ENT_QUOTES, 'UTF-8')); ?></p>

    <!-- Links para voltar -->
    <p><a href="ex03.php"><i class="fa-solid fa-arrow-left"></i> Voltar Exercício</a></p>
    <p><a href="../index.php"><i class="fa-solid fa-house"></i> Voltar Menu</a></p>
</body>
</html>
