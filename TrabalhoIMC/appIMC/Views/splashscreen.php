<!DOCTYPE html>
<!-- Tela de abertura: logos institucionais, título do app; redireciona para imc.php após 5 s (meta refresh). -->
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Redirecionamento automático para o formulário -->
    <meta http-equiv="refresh" content="5;url=imc.php">
    <title>SplashScreen - Aplicativo IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Layout full-height e estilos do cabeçalho/rodapé e spinner */
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .header {
            min-height: 86px;
            padding: 10px 30px;
            gap: 20px;
        }

        .header img {
            max-height: 64px;
            max-width: 220px;
            object-fit: contain;
        }

        .footer {
            min-height: 60px;
            padding: 10px 30px;
        }

        .spinner {
            font-size: 3rem;
            color: #007bff;
            margin-top: 20px;
            animation: spin 1s linear infinite; 
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="d-flex flex-column justify-content-between vh-100">
    <header class="d-flex justify-content-between align-items-center header border-bottom">
        <div>
            <img src="assets/img/FatecJahu_2025-2.png" alt="Logo Fatec Jahu">
        </div>
        <div class="mx-auto text-center">
            <img src="assets/img/centro-paula-souza-logo.svg" alt="Logo Centro Paula Souza">
        </div>
        <div>
            <img src="assets/img/FatecJahu-CST-DSM.png" alt="Logo do curso de DSM">
        </div>
    </header>

    <!-- Conteúdo central: nome do app, spinner e créditos acadêmicos -->
    <main class="d-flex flex-column justify-content-center align-items-center flex-grow-1 px-3">
        <h1 class="fw-bold mb-4 text-center">Aplicativo IMC</h1>
        <i class="fas fa-spinner fa-spin spinner"></i>
        <h3 class="fw-bold my-4 text-center">Curso Superior de Tecnologia em<br>Desenvolvimento de Software Multiplataforma</h3>
        <p class="text-center"><strong>José Augusto Zen Ferri</strong></p>
        <p class="text-center">Professor: Alex Paulo Lopes Batista<br>Disciplina: Desenvolvimento Web II (DW2).</p>
    </main>

    <footer class="footer text-center">
        <p>&copy; Todos os direitos reservados. Faculdade de Tecnologia de Jahu, 2025.</p>
    </footer>
</body>

</html>
