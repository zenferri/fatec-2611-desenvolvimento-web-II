<?php
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }

    // Sanitizar saída
    $usuarioNome = htmlspecialchars($_SESSION['usuario_nome'], ENT_QUOTES, 'UTF-8');
    $tipoDescricao = htmlspecialchars($_SESSION['tipo_descricao'], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Bem-vindo ao Dashboard!</h1>
        <p>Olá <?= $usuarioNome ?>, você está logado!!!</p>
        <p>Autorizado: <?= $tipoDescricao ?></p>
        <a href="logout.php">Logout</a>
    </body>
</html>

