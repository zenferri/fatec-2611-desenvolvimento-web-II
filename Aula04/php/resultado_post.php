<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <title>Resultado POST - Nome e Sobrenome</title>
</head>
<body>
    <?php 
        // 1. Capturar nome e sobre através do método POST.
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];

        // 2. Atribuição da variável nomecompleto via concatenação de strings.
        $nomecompleto =  $nome . ' ' . $sobrenome;

        // 3. Atribuição da variável nomecompleto1 via interpolação de strings.
        $nomecompleto1 = "{$nome} {$sobrenome}";
    ?>
    <h1>Resultado POST - Nome e Sobrenome</h1>
    <p><strong>Nome: </strong><?php echo $nome ?> </p>
    <p><strong>Sobrenome: </strong><?php echo $sobrenome ?> </p>
    <hr>
    <h2>Concatenção de Strings</h2>     
    <p><strong>Nome Completo: </strong> <?php echo $nomecompleto ?> </p>
    <h2>Interpolação de Strings</h2>     
    <p><strong>Nome Completo: </strong> <?php echo $nomecompleto1 ?> </p>
</body>
</html>