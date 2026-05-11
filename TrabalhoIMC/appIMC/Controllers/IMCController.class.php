<?php

/**
 * Controlador: orquestra telas (splash, formulário, resultado) e o fluxo POST do cálculo.
 */
class IMCController // classe IMCController
{
    /** Exibe a tela inicial (splash) com redirecionamento automático no HTML. */
    public function splashscreen(): void // void é um tipo de retorno que não retorna nada
    {
        require_once "Views/splashscreen.php";
    }

    /** Formulário de peso/altura; lê ?erro=1 para exibir mensagem de validação. */
    public function formulario(): void
    {
        $erro = $_GET["erro"] ?? "";
        require_once "Views/imc.php";
    }

    /**
     * Recebe POST, valida números, calcula IMC, grava em sessão e redireciona para resultado.php.
     * GET ou dados inválidos redirecionam de volta ao formulário.
     */
    public function calcular(): void
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") { // se o metodo da requisição não for POST
            header("Location: imc.php");
            exit; // sai da pagina
        }

        $peso = $this->converterNumero($_POST["peso"] ?? ""); // converte o peso para float
        $altura = $this->converterNumero($_POST["altura"] ?? ""); // converte a altura para float

        if ($peso <= 0 || $altura <= 0) { // se o peso ou a altura for menor ou igual a 0
            header("Location: imc.php?erro=1");
            exit; // sai da pagina
        }

        require_once "Models/IMC.class.php"; // carrega o modelo IMC

        $imcModel = new IMC(); // cria uma instância do modelo IMC
        $imc = $imcModel->CalcularIMC($altura, $peso);
        $classificacao = $imcModel->ClassificacaoIMC($imc); // classifica o IMC
        $recomendacao = $imcModel->Recomendacao($imc); // recomenda o IMC

        $_SESSION["resultado_imc"] = array( // salva o resultado do IMC na sessão   
            "peso" => $peso,
            "altura" => $altura,
            "imc" => $imc,
            "classificacao" => $classificacao,
            "recomendacao" => $recomendacao
        );

        header("Location: resultado.php"); // redireciona para a pagina resultado.php
        exit;
    }

    /** Lê resultado da sessão e renderiza a view; sem sessão, volta ao formulário. */
    public function resultado(): void
    {
        if (!isset($_SESSION["resultado_imc"])) { // se o resultado do IMC não estiver na sessão
            header("Location: imc.php"); // redireciona para a pagina imc.php
            exit;
        }

        $resultado = $_SESSION["resultado_imc"];
        require_once "Views/resultado.php"; // carrega a view resultado.php
    }

    /** Normaliza entrada brasileira (vírgula decimal) para float. */
    private function converterNumero(string $valor): float // converte o valor para float
    {
        return (float) str_replace(",", ".", trim($valor)); // converte a vírgula para ponto e remove os espaços
    }
}
