<?php

class IMC
{
    /*
     * Caro professor Alex:
     * 
     * A regra de negócio do trabalho especifica "peso: float, altura: float, imc: double".
     * Eu tentei colocar  "public double $imc;", mas gera Fatal error. Pesquisei e descobri que
     * no PHP, "float" e "double" são apenas nomes diferentes para o msm tipo interno de ponto flutuante.
     * Por isso, declarei o atributo $imc como "float" pra evitar o erro. 
     */

    /** Peso em kg (último cálculo). */
    public float $peso;
    /** Altura em metros (último cálculo). */
    public float $altura;
    /** Valor numérico do IMC (último cálculo) — float = double em PHP (64 bits). */
    public float $imc; 

    /** Calcula IMC = peso / alturaˆ2 e guarda nos atributos da instância. */
    public function CalcularIMC(float $altura, float $peso): float
    {
        $this->altura = $altura;
        $this->peso = $peso;
        $this->imc = $peso / ($altura ** 2);

        return $this->imc;
    }

    /** Retorna a classificação conforme faixas de IMC utilizadas no app. */
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

    /** Recomendação de regime sugerido a partir de IMC ≥ 25. */
    public function Recomendacao(float $imc): string
    {
        if ($imc >= 25) {
            return "Sim, precisa fazer regime";
        }

        return "Não precisa fazer regime";
    }
}
