<?php

declare(strict_types=1);

/**
 * Model: só regras do IMC (cálculo, classificação, recomendação).
 */
final class IMC
{
    private float $peso;

    private float $altura;

    private float $imc;

    public function __construct(float $peso = 0.0, float $altura = 0.0, float $imc = 0.0)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $imc;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function getImc(): float
    {
        return $this->imc;
    }

    public function calcularIMC(float $altura, float $peso): float
    {
        if ($altura <= 0.0) {
            throw new InvalidArgumentException('Altura inválida.');
        }
        $this->altura = $altura;
        $this->peso = $peso;
        $this->imc = $peso / ($altura * $altura);

        return $this->imc;
    }

    public function classificarIMC(float $imc): string
    {
        if ($imc < 19.0) {
            return 'Abaixo do Peso Normal';
        }
        if ($imc >= 19.0 && $imc <= 24.9) {
            return 'Peso Normal';
        }
        if ($imc >= 25.0 && $imc <= 29.9) {
            return 'Sobrepeso';
        }
        if ($imc >= 30.0 && $imc <= 34.9) {
            return 'Obesidade Grau I';
        }
        if ($imc >= 35.0 && $imc <= 39.9) {
            return 'Obesidade Grau II';
        }

        return 'Obesidade Grau III ou Obesidade Mórbida';
    }

    /** @return array{mensagem: string, background: string, color: string} */
    public function recomendacao(float $imc): array
    {
        if ($imc >= 25.0) {
            return [
                'mensagem' => 'Sim precisa fazer regime',
                'background' => 'vermelho',
                'color' => 'branco',
            ];
        }

        return [
            'mensagem' => 'Não precisa fazer regime',
            'background' => 'verde',
            'color' => 'branco',
        ];
    }
}
