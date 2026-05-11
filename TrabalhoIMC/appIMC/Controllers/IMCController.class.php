<?php

/**
 * Controlador: orquestra telas (splash, formulário, resultado) e o fluxo POST do cálculo.
 */
class IMCController
{
    /** Exibe a tela inicial (splash) com redirecionamento automático no HTML. */
    public function splashscreen(): void
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
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: imc.php");
            exit;
        }

        $peso = $this->converterNumero($_POST["peso"] ?? "");
        $altura = $this->converterNumero($_POST["altura"] ?? "");

        if ($peso <= 0 || $altura <= 0) {
            header("Location: imc.php?erro=1");
            exit;
        }

        require_once "Models/IMC.class.php";

        $imcModel = new IMC();
        $imc = $imcModel->CalcularIMC($altura, $peso);
        $classificacao = $imcModel->ClassificacaoIMC($imc);
        $recomendacao = $imcModel->Recomendacao($imc);

        $_SESSION["resultado_imc"] = array(
            "peso" => $peso,
            "altura" => $altura,
            "imc" => $imc,
            "classificacao" => $classificacao,
            "recomendacao" => $recomendacao
        );

        header("Location: resultado.php");
        exit;
    }

    /** Lê resultado da sessão e renderiza a view; sem sessão, volta ao formulário. */
    public function resultado(): void
    {
        if (!isset($_SESSION["resultado_imc"])) {
            header("Location: imc.php");
            exit;
        }

        $resultado = $_SESSION["resultado_imc"];
        require_once "Views/resultado.php";
    }

    /** Normaliza entrada brasileira (vírgula decimal) para float. */
    private function converterNumero(string $valor): float
    {
        return (float) str_replace(",", ".", trim($valor));
    }
}
