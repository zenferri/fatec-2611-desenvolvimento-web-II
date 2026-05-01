<?php
// Pega o valor enviado pelo formulário.
$anoTexto = trim((string) ($_POST["ano"] ?? ""));
$anoValido = filter_var($anoTexto, FILTER_VALIDATE_INT);

// Variáveis usadas para montar a resposta.
$mensagemFinal = "";
$regraPrincipal = "";
$primeiraExcecao = "";
$segundaExcecao = "";

// Se o valor não for válido, mostra aviso.
if ($anoTexto === "" || $anoValido === false) {
    $mensagemFinal = "Valor inválido. Informe um ano inteiro.";
} else {
    $ano = (int) $anoValido;

    // Aqui eu verifico as divisões pedidas no enunciado.
    $divisivelPor4 = ($ano % 4 === 0);
    $divisivelPor100 = ($ano % 100 === 0);
    $divisivelPor400 = ($ano % 400 === 0);

    // Estas frases explicam cada regra.
    $regraPrincipal = $divisivelPor4
        ? "O ano $ano é divisível por 4."
        : "O ano $ano não é divisível por 4.";

    $primeiraExcecao = $divisivelPor100
        ? "Primeira exceção: é divisível por 100."
        : "Primeira exceção: não é divisível por 100.";

    $segundaExcecao = $divisivelPor400
        ? "Segunda exceção: é divisivel por 400."
        : "Segunda exceção: não é divisível por 400.";

    // Aqui eu monto a conclusão final.
    if (!$divisivelPor4) {
        $mensagemFinal = "$ano: Não é divisível por 4. Portanto, não é um ano bissexto.";
    } elseif ($divisivelPor100 && !$divisivelPor400) {
        $mensagemFinal = "$ano: É divisivel por 100, mas não por 400. Portanto, não é um ano bissexto.";
    } elseif ($divisivelPor100 && $divisivelPor400) {
        $mensagemFinal = "$ano: É divisivel por 4, por 100 e por 400. Portanto, é um ano bissexto.";
    } else {
        $mensagemFinal = "$ano: É divisivel por 4 e não por 100. Portanto, é um ano bissexto.";
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
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <h2>Resultado da análise do ano informado.</h2>

    <!-- Só mostra as regras quando o ano foi informado corretamente -->
    <?php if ($regraPrincipal !== ""): ?>
        <p><strong>Regra principal:</strong> <?= htmlspecialchars($regraPrincipal, ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Primeira exceção:</strong> <?= htmlspecialchars($primeiraExcecao, ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Segunda exceção:</strong> <?= htmlspecialchars($segundaExcecao, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <!-- Mostra a resposta final -->
    <p><strong>Conclusão:</strong> <?= htmlspecialchars($mensagemFinal, ENT_QUOTES, 'UTF-8'); ?></p>

    <!-- Links para voltar -->
    <p><a href="ex01.php"><i class="fa-solid fa-arrow-left"></i> Voltar Exercício</a></p>
    <p><a href="../index.php"><i class="fa-solid fa-house"></i> Voltar Menu</a></p>
</body>
</html>
