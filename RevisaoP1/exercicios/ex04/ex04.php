<!-- Leia uma nota e uma porcentagem de presença. Informe se o aluno
aprovou com nota maior ou superior a 6, se o aluno foi para a segunda época quando a nota é maior ou igual que 4 e menor que 6, ou se o aluno reprovou
nota inferior a 4. Entrada e saída de dados em PHP -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex04 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Ex04 - PHP</h1>
    <h2>Leia uma nota e uma porcentagem de presença. Informe se o aluno aprovou
        com nota maior ou superior a 6, se o aluno foi para a segunda época quando
        a nota é maior ou igual que 4 e menor que 6, ou se o aluno reprovou nota
        inferior a 4.</h2>

    <!-- Formulário: recebe a nota e a porcentagem de presença -->
    <form id="ex04" name="ex04" action="ex04_resultado.php" method="post">
        <label for="nota">Nota:</label>
        <input type="number" id="nota" name="nota">
        <label for="presenca">Presença:</label>
        <input type="number" id="presenca" name="presenca">
        <div>
            <!-- submit envia o formulário; reset limpa os campos no navegador -->
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>
    <br>
    
    <!-- Link de retorno ao menu principal -->
    <p><a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Voltar Menu</a></p>
</body>
</html>