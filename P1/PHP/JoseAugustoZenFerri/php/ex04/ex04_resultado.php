<?php
// Pega o número digitado no formulário.
$numeroTexto = trim((string) ($_POST["numero"] ?? ""));
$numeroValido = filter_var($numeroTexto, FILTER_VALIDATE_INT);
$diaSemana = "";
$mensagem = "";

// Se o valor não for inteiro, já mostra erro.
if ($numeroTexto === "" || $numeroValido === false) {
    $mensagem = "Número inválido. Informe um número entre 1 e 7.";
} else {
    $numero = (int) $numeroValido;

    // O switch escolhe o dia da semana.
    switch ($numero) {
        case 1:
            $diaSemana = "Segunda-feira";
            break;
        case 2:
            $diaSemana = "Terça-feira";
            break;
        case 3:
            $diaSemana = "Quarta-feira";
            break;
        case 4:
            $diaSemana = "Quinta-feira";
            break;
        case 5:
            $diaSemana = "Sexta-feira";
            break;
        case 6:
            $diaSemana = "Sábado";
            break;
        case 7:
            $diaSemana = "Domingo";
            break;
        default:
            $mensagem = "Número inválido. Informe um número entre 1 e 7.";
    }

    // Se encontrou um dia, monta a resposta final.
    if ($diaSemana !== "") {
        $mensagem = "O número $numero corresponde a $diaSemana.";
    }
}
?>
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
    <h2>Resultado da identificação do dia da semana.</h2>

    <!-- Mostra a resposta do exercício -->
    <p><strong>Resposta:</strong> <?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></p>

    <!-- Links para voltar -->
    <p><a href="ex04.php"><i class="fa-solid fa-arrow-left"></i> Voltar Exercício</a></p>
    <p><a href="../index.php"><i class="fa-solid fa-house"></i> Voltar Menu</a></p>
</body>
</html>
