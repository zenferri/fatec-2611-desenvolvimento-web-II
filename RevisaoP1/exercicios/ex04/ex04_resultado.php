<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configuração básica da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4</h1>
<?php
    $nota = $_POST["nota"];
    $presenca = $_POST["presenca"];
    if ($nota >= 6 && $presenca >= 75) {
        echo "Aprovado com nota $nota e presença de $presenca%!";
    } else if ($nota >= 4 && $presenca < 75) {
        echo "Aprovado na segunda época com nota $nota e presença $presenca%!";
    } else {
        echo "Reprovado com nota $nota e presença $presenca%!";
    }
?>
</body>
</html>


