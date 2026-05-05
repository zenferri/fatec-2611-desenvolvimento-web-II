<?php
session_start();
include('config_pdo.php'); // Supondo que $conn é PDO

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
        exit;
    }

    try {
        // Preparar consulta segura com PDO
        $sql = "SELECT * FROM usuario WHERE email = :email LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':email' => $email]);

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            if (password_verify($senha, $usuario['senha'])) {
                // Login bem-sucedido
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['tipo_id'] = $usuario['tipo_id'];

                // Atribuir descrição do tipo de usuário
                switch ($_SESSION['tipo_id']) {
                    case 1:
                        $_SESSION['tipo_descricao'] = "Administrador";
                        break;
                    case 2:
                        $_SESSION['tipo_descricao'] = "Supervisor";
                        break;
                    default:
                        $_SESSION['tipo_descricao'] = "Usuário Comum";
                        break;
                }

                setcookie("usuario", $usuario['nome'], time() + (86400 * 30), "/");
                header('Location: dashboard.php');
                exit;
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }
    } catch (PDOException $e) {
        // Log do erro para análise do desenvolvedor
        error_log("Erro no login: " . $e->getMessage());
        echo "Erro no sistema. Tente novamente mais tarde.";
    }
}
?>

<form method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required autofocus /><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required /><br>
    <input type="submit" id="login" name="login" value="Login" />
</form>