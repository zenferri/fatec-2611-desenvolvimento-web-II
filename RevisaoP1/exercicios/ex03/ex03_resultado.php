<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3</h1>
    <?php
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    echo "A área do retângulo é $area e o perímetro é $perimetro";
    ?>
</body>
</html>