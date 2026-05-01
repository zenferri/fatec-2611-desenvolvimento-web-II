<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <title>PHP - Nome e Sobrenome</title>
</head>
<body>
    <h1>PHP - Nome e Sobrenome - GET</h1>
    <form id="nomes" action="resultado_get.php" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Entre com o seu nome." tabindex="1" />
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Entre com o seu sobrenome." tabindex="2" />
        <div id="buttons">
            <input type="submit" id="Enviar" name="Enviar" value="Enviar" />
            <input type="reset" id="Limpar" name="Limpar" value="Limpar" />
        </div>
    </form>    
</body>
</html>