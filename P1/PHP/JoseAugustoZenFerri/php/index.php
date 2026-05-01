<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações básicas da página principal -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova de PHP - P1</title>
    <style>
        /* Importação Google Fonts - Lato. */
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

        :root {
            color-scheme: light;
            --bg-start: #f3f7ff;
            --bg-end: #eef2f8;
            --surface: #ffffff;
            --surface-soft: #f8fbff;
            --border: #d5deec;
            --text: #1e293b;
            --muted: #52607a;
            --primary: #1d4ed8;
            --primary-dark: #1e40af;
            --shadow: 0 18px 40px rgba(15, 23, 42, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Lato, Arial, "Times New Roman";
            font-size: 15px;
            line-height: 1.6;
            color: var(--text);
            max-width: 960px;
            margin: 0 auto;
            padding: 32px 20px 48px;
            background: linear-gradient(180deg, var(--bg-start) 0%, var(--bg-end) 100%);
        }

        .capa,
        .menu {
            background-color: rgba(255, 255, 255, 0.92);
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .capa {
            padding: 28px;
            margin-bottom: 24px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 18px;
            margin-bottom: 28px;
        }

        header div {
            flex: 1;
        }

        header div:nth-child(2) {
            text-align: center;
        }

        header div:last-child {
            text-align: right;
        }

        header img {
            max-width: 100%;
            height: 60px;
            object-fit: contain;
        }

        h1 {
            margin: 0 0 8px;
            font-size: 2.2rem;
            color: #0f172a;
        }

        h2 {
            margin: 0;
            font-size: 1rem;
            font-weight: 400;
            color: var(--muted);
        }

        .dados-prova {
            padding: 18px 20px;
            border-left: 4px solid var(--primary);
            border-radius: 14px;
            background-color: var(--surface-soft);
        }

        .dados-prova p {
            margin: 0;
        }

        .menu {
            padding: 24px;
        }

        .menu h3 {
            margin: 0 0 16px;
            font-size: 1.1rem;
            color: #0f172a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 16px;
        }

        th,
        td {
            padding: 14px 16px;
            border: 1px solid var(--border);
        }

        th {
            text-align: left;
            color: #ffffff;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        }

        tr:nth-child(even) td {
            background-color: #f8fbff;
        }

        tr:nth-child(odd) td {
            background-color: #eef4ff;
        }

        .linha100 {
            width: 70%;
        }

        .linha80 {
            width: 30%;
            text-align: center;
        }

        a {
            display: inline-block;
            min-width: 92px;
            padding: 10px 14px;
            border-radius: 12px;
            color: #ffffff;
            font-weight: 700;
            text-decoration: none;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            box-shadow: 0 10px 22px rgba(29, 78, 216, 0.22);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        a:hover {
            transform: translateY(-1px);
            box-shadow: 0 14px 26px rgba(29, 78, 216, 0.26);
        }

        @media (max-width: 700px) {
            body {
                padding: 20px 14px 32px;
            }

            header {
                flex-direction: column;
            }

            header div,
            header div:nth-child(2),
            header div:last-child {
                text-align: center;
            }

            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Parte de cima com as informações da prova -->
    <section class="capa">
        <header>
            <div>
                <img src="imagens/FatecJahu_2026-1.png" alt="Logo Esquerda (Fatec Jahu)" height="60">
            </div>
            <div>
                <img src="imagens/centro-paula-souza-logo.svg" alt="Logo Centro (CPS)" height="60">
            </div>
            <div>
                <img src="imagens/FatecJahu-CST-DSM.png" alt="Logo Direita (DSM)" height="60">
            </div>
        </header>

        <h1>Prova de PHP - P1 - 13/04/2026</h1>
        <div class="dados-prova">
            <p><strong>Aluno:</strong> José Augusto Zen Ferri</p>
            <p><strong>Disciplina:</strong> DW2</p>
            <p><strong>Professor:</strong> Alex</p>
        </div>
    </section>

    <!-- Tabela com os links dos exercícios -->
    <section class="menu">
        <h3>Lista de Exercícios</h3>
        <table>
            <tr>
                <th class="linha100">Exercício</th>
                <th class="linha80">PHP</th>
            </tr>
            <tr>
                <td class="linha100">Exercício 1</td>
                <td class="linha80"><a href="ex01/ex01.php">Abrir</a></td>
            </tr>
            <tr>
                <td class="linha100">Exercício 2</td>
                <td class="linha80"><a href="ex02/ex02.php">Abrir</a></td>
            </tr>
            <tr>
                <td class="linha100">Exercício 3</td>
                <td class="linha80"><a href="ex03/ex03.php">Abrir</a></td>
            </tr>
            <tr>
                <td class="linha100">Exercício 4</td>
                <td class="linha80"><a href="ex04/ex04.php">Abrir</a></td>
            </tr>
            <tr>
                <td class="linha100">Exercício 5</td>
                <td class="linha80"><a href="ex05/ex05.php">Abrir</a></td>
            </tr>
        </table>
    </section>
</body>
</html>