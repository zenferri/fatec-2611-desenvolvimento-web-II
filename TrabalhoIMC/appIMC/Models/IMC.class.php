<?php

/**
 * Modelo de domínio do IMC: cálculo, faixas da OMS e recomendação simples.
 */
class IMC
{
    /** Peso em kg (último cálculo). */
    public float $peso;
    /** Altura em metros (último cálculo). */
    public float $altura;
    /** Valor numérico do IMC (último cálculo). */
    public float $imc;

    /** Calcula IMC = peso / altura² e guarda nos atributos da instância. */
    public function CalcularIMC(float $altura, float $peso): float
    {
        $this->altura = $altura;
        $this->peso = $peso;
        $this->imc = $peso / ($altura ** 2);

        return $this->imc;
    }

    /** Retorna a classificação textual conforme faixas de IMC utilizadas no app. */
    public function ClassificacaoIMC(float $imc): string
    {
        if ($imc < 19) {
            return "Abaixo do Peso Normal";
        }

        if ($imc < 25) {
            return "Peso Normal";
        }

        if ($imc < 30) {
            return "Sobrepeso";
        }

        if ($imc < 35) {
            return "Obesidade Grau I";
        }

        if ($imc < 40) {
            return "Obesidade Grau II";
        }

        return "Obesidade Grau III";
    }

    /** Recomendação didática: regime sugerido a partir de IMC ≥ 25. */
    public function Recomendacao(float $imc): string
    {
        if ($imc >= 25) {
            return "Sim, precisa fazer regime";
        }

        return "Não precisa fazer regime";
    }
}
