<?php
/**
 * View de resultado do IMC: recebe $resultado (array) do controlador.
 * Formata números no padrão BR e define cores por classificação.
 */
$peso = number_format($resultado["peso"], 2, ",", "."); 
$altura = number_format($resultado["altura"], 2, ",", ".");
$imc = number_format($resultado["imc"], 2, ",", ".");
$classificacao = $resultado["classificacao"];
$recomendacao = $resultado["recomendacao"];
$classeRecomendacao = $resultado["imc"] >= 25 ? "bg-danger" : "bg-success";
$coresClassificacao = array(
    "Abaixo do Peso Normal" => "#E91C1D",
    "Peso Normal" => "#B7CD26",
    "Sobrepeso" => "#F3B703",
    "Obesidade Grau I" => "#F39206",
    "Obesidade Grau II" => "#EC581D",
    "Obesidade Grau III" => "#C6181C"
);
$corClassificacao = $coresClassificacao[$classificacao] ?? "#0d6efd";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Resultados Finais</title>
</head>

<body>
    <main class="container py-5">
        <h1 class="text-center mb-4">Resultados Finais</h1>

        <!-- Dados informados e IMC calculado -->
        <div class="mb-4">
            <p><strong>Altura:</strong> <?= $altura ?> m</p>
            <p><strong>Peso:</strong> <?= $peso ?> kg</p>
            <p><strong>IMC:</strong> <?= $imc ?></p>
        </div>

        <!-- Referência visual (tabela IMC) -->
        <figure class="mb-4">
            <figcaption class="h5">Tabela de Classificação do IMC</figcaption>
            <img class="img-fluid border rounded" src="assets/img/tabelaimc.png" alt="Tabela de Classificação do IMC">
        </figure>

        <!-- Faixa textual com cor dinâmica -->
        <p><strong>Resultado do IMC:</strong></p>
        <div class="container mb-3 mt-3 text-light p-3 rounded" style="background-color: <?= $corClassificacao ?>;">
            <p id="classificacao" class="mb-0">
                O IMC é igual a <?= $imc ?>, portanto, você está na faixa de "<?= $classificacao ?>".
            </p>
        </div>

        <!-- Recomendação (Bootstrap success/danger) -->
        <p><strong>Recomendação:</strong></p>
        <div class="container mb-3 mt-3 <?= $classeRecomendacao ?> text-light p-3 rounded">
            <p id="recomendacao" class="mb-0"><?= $recomendacao ?></p>
        </div>

        <a class="btn btn-secondary" href="imc.php">Calcular novamente</a>
    </main>
</body>

</html>
