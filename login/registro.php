<?php
    session_start();
    include('config_pdo.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = trim($_POST['nome']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $telefone = preg_replace('/\D/', '', $_POST['telefone']);
        $senha = $_POST['senha'];
        $conf_senha = $_POST['conf_senha'];
        $tipo_id = intval($_POST['tipo_id']);

        $_SESSION['old'] = [
            'nome' => $nome,
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'tipo_id' => $tipo_id
        ];

        if (!$nome) {
            $_SESSION['msg'] = "Por favor, informe seu nome.";
            $_SESSION['msg_type'] = 'error';
        } elseif (!$email) {
            $_SESSION['msg'] = "Email inválido.";
            $_SESSION['msg_type'] = 'error';
        } elseif (!in_array($tipo_id, [1, 2, 3])) {
            $_SESSION['msg'] = "Tipo de usuário inválido.";
            $_SESSION['msg_type'] = 'error';
        } elseif ($senha !== $conf_senha) {
            $_SESSION['msg'] = "As senhas não conferem.";
            $_SESSION['msg_type'] = 'error';
        } elseif (strlen($senha) < 6) {
            $_SESSION['msg'] = "A senha deve ter pelo menos 6 caracteres.";
            $_SESSION['msg_type'] = 'error';
        } else {
            try {
                $sqlCheck = "SELECT COUNT(*) FROM usuario WHERE email = :email";
                $stmtCheck = $conn->prepare($sqlCheck);
                $stmtCheck->execute([':email' => $email]);
                if ($stmtCheck->fetchColumn() > 0) {
                    $_SESSION['msg'] = "Email já cadastrado.";
                    $_SESSION['msg_type'] = 'error';
                } else {
                    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO usuario (nome, email, telefone, senha, tipo_id) 
                            VALUES (:nome, :email, :telefone, :senha, :tipo_id)";
                    $stmt = $conn->prepare($sql);
                    $executou = $stmt->execute([
                        ':nome' => $nome,
                        ':email' => $email,
                        ':telefone' => $telefone,
                        ':senha' => $senhaHash,
                        ':tipo_id' => $tipo_id
                    ]);
                    if ($executou) {
                        $_SESSION['msg'] = "Registro criado com sucesso! Você já pode fazer login";
                        $_SESSION['msg_type'] = 'success';
                        unset($_SESSION['old']);                                               
                    } else {
                        $_SESSION['msg'] = "Erro ao criar usuário. Tente novamente.";
                        $_SESSION['msg_type'] = 'error';
                    }
                }
            } catch (PDOException $e) {
                error_log("Erro no registro: " . $e->getMessage());
                $_SESSION['msg'] = "Erro no sistema. Tente novamente mais tarde.";
                $_SESSION['msg_type'] = 'error';
            }
        }
        //header('Location: ' . $_SERVER['PHP_SELF']);
        header('Location: login.php');
        exit;
    }

    // Exibir formulário e mensagens
    $msg = $_SESSION['msg'] ?? '';
    $msg_type = $_SESSION['msg_type'] ?? '';
    $old = $_SESSION['old'] ?? [];

    unset($_SESSION['msg'], $_SESSION['msg_type']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Registro de Usuário</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .msg { padding: 10px; margin-bottom: 15px; border-radius: 5px; }
        .error { background-color: #f8d7da; color: #721c24; }
        .success { background-color: #d4edda; color: #155724; }
        label { display: block; margin-top: 10px; }
        input, select { width: 300px; padding: 8px; margin-top: 5px; }
        input[type="submit"] { width: auto; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Registrar Usuário</h2>

    <?php if ($msg): ?>
        <div class="msg <?= htmlspecialchars($msg_type) ?>">
            <?= htmlspecialchars($msg) ?>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($old['nome'] ?? '') ?>" required autofocus />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>" required />

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($old['telefone'] ?? '') ?>" />

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required />

        <label for="conf_senha">Confirmar Senha:</label>
        <input type="password" id="conf_senha" name="conf_senha" required />

        <label for="tipo_id">Tipo de Usuário:</label>
        <select id="tipo_id" name="tipo_id">
            <option value="1" <?= (isset($old['tipo_id']) && $old['tipo_id'] == 1) ? 'selected' : '' ?>>Admin</option>
            <option value="2" <?= (isset($old['tipo_id']) && $old['tipo_id'] == 2) ? 'selected' : '' ?>>Supervisor</option>
            <option value="3" <?= (!isset($old['tipo_id']) || $old['tipo_id'] == 3) ? 'selected' : '' ?>>Usuário Comum</option>
        </select>

        <br><br>
        <input type="submit" value="Registrar" />
    </form>

</body>
</html>
