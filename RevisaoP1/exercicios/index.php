<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de JS e PHP</title>
    <style>
        /* Importação Google Fonts - Lato. */
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

        body {
            font-family: Lato, Arial, "Times New Roman";
            font-size: 14px;
        }

        h1 {
            margin-bottom: 5px;
        }

        tr, td {
            border: solid 1px black;            
        }

        .linha100 {
            width: 100px;
        }

        .linha80{
            width: 80px;
            text-align: center;
        }

        .celula-linha1 {
            font-weight: bold;
            padding: 5px;
            color: white;
            background-color: #2FA3EE;
        }

        /* odd => igual a linha ímpar da tabela. */
        tr:nth-child(odd) {
            background-color: #E8F0FC;
        }
        
        /* even => igual a linha par da tabela. */
        tr:nth-child(even) {
            background-color: #CDE0F8;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="imagens/FatecJahu_2026-1.png" alt="Logo Esquerda (Fatec Jahu)" height="60" />
        </div>
        <div class="mx-auto">
            <img src="imagens/centro-paula-souza-logo.svg" alt="Logo Centro (CPS)" height="60" />
        </div>
        <div>
            <img src="imagens/FatecJahu-CST-DSM.png" alt="Logo Direita (DSM)" height="60" />
        </div>        
    </header>
    <br>
    <h1>Exercícios de JS e PHP</h1>    
    <table>
        <tr>
            <td colspan="3" class="celula-linha1">Lista de Exercícios</td>
        </tr>
        <tr>
            <td class="linha100">Exercício 1</td>
            <td class="linha80"><a href="ex01/ex01.html">JS</a></td>
            <td class="linha80"><a href="ex01/ex01.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 2</td>
            <td class="linha80"><a href="ex02/ex02.html">JS</a></td>
            <td class="linha80"><a href="ex02/ex02.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 3</td>
            <td class="linha80"><a href="ex03/ex03.html">JS</a></td>
            <td class="linha80"><a href="ex03/ex03.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 4</td>
            <td class="linha80"><a href="ex04/ex04.html">JS</a></td>
            <td class="linha80"><a href="ex04/ex04.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 5</td>
            <td class="linha80"><a href="ex05/ex05.html">JS</a></td>
            <td class="linha80"><a href="ex05/ex05.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 6</td>
            <td class="linha80"><a href="ex06/ex06.html">JS</a></td>
            <td class="linha80"><a href="ex06/ex06.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 7</td>
            <td class="linha80"><a href="ex07/ex07.html">JS</a></td>
            <td class="linha80"><a href="ex07/ex07.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 8</td>
            <td class="linha80"><a href="ex08/ex08.html">JS</a></td>
            <td class="linha80"><a href="ex08/ex08.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 9</td>
            <td class="linha80"><a href="ex09/ex09.html">JS</a></td>
            <td class="linha80"><a href="ex09/ex09.php">PHP</a></td>
        </tr>
        <tr>
            <td class="linha100">Exercício 10</td>
            <td class="linha80"><a href="ex10/ex10.html">JS</a></td>
            <td class="linha80"><a href="ex10/ex10.php">PHP</a></td>
        </tr>        
    </table>
</body>
</html>