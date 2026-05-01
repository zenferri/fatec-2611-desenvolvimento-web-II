<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configuração básica da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <?php
        // Recupera os dados enviados pelo formulário (método POST).
        $nomecompleto = $_POST["nomecompleto"];
        $email        = $_POST["email"];
        $telefone     = $_POST["telefone"];
        $idade        = $_POST["idade"];

        // Monta a frase final com as informações do usuário.
        $resposta = $nomecompleto ." tem ". $idade.
        " anos. Seu email:" . $email ." e telefone: ". $telefone.'.';

        // Exibe a resposta no corpo da página.
        echo $resposta;
    ?>
</body>
</html>