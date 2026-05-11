<?php

declare(strict_types=1);

/**
 * Controller: recebe a rota, fala com o Model e mostra a View.
 */
final class IMCController
{
    private array $config;

    private IMC $model;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->model = new IMC();
    }

    public function splash(): void
    {
        $this->view('splashscreen', [
            'redirectSeconds' => (int) ($this->config['splash_redirect_seconds'] ?? 5),
        ]);
    }

    public function imc(): void
    {
        $errors = $_SESSION['imc_errors'] ?? [];
        unset($_SESSION['imc_errors']);
        $old = $_SESSION['imc_old'] ?? ['peso' => '', 'altura' => ''];
        unset($_SESSION['imc_old']);

        $this->view('imc', [
            'errors' => $errors,
            'oldPeso' => (string) ($old['peso'] ?? ''),
            'oldAltura' => (string) ($old['altura'] ?? ''),
        ]);
    }

    public function calcular(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('imc');
            return;
        }

        $validacao = $this->validar($_POST);
        if (!$validacao['ok']) {
            $_SESSION['imc_errors'] = $validacao['errors'];
            $_SESSION['imc_old'] = [
                'peso' => (string) ($_POST['peso'] ?? ''),
                'altura' => (string) ($_POST['altura'] ?? ''),
            ];
            $this->redirect('imc');
            return;
        }

        $peso = $validacao['peso'];
        $altura = $validacao['altura'];

        $imcValor = $this->model->calcularIMC($altura, $peso);
        $classificacao = $this->model->classificarIMC($imcValor);
        $recomendacao = $this->model->recomendacao($imcValor);
        $classStyles = $this->coresDaClassificacao($classificacao);

        $fmt = static fn (float $n): string => number_format($n, 1, ',', '.');

        $this->view('resultado', [
            'pesoFormatado' => $fmt($peso),
            'alturaFormatada' => $fmt($altura),
            'imcFormatado' => $fmt($imcValor),
            'classificacao' => $classificacao,
            'recomendacao' => $recomendacao,
            'classStyles' => $classStyles,
            'fraseResultado' => sprintf(
                'O IMC é igual a %s, portanto, você está na faixa de "%s".',
                $fmt($imcValor),
                $classificacao
            ),
        ]);
    }

    /** Cores iguais às do exemplo do trabalho (resultado). */
    /** @return array{background: string, color: string} */
    private function coresDaClassificacao(string $classificacao): array
    {
        $map = [
            'Abaixo do Peso Normal' => ['background' => '#E91C1D', 'color' => '#ffffff'],
            'Peso Normal' => ['background' => '#B7CD26', 'color' => '#ffffff'],
            'Sobrepeso' => ['background' => '#F3B703', 'color' => '#212529'],
            'Obesidade Grau I' => ['background' => '#F39206', 'color' => '#ffffff'],
            'Obesidade Grau II' => ['background' => '#EC581D', 'color' => '#ffffff'],
            'Obesidade Grau III ou Obesidade Mórbida' => ['background' => '#C6181C', 'color' => '#ffffff'],
        ];

        return $map[$classificacao] ?? ['background' => '#0d6efd', 'color' => '#ffffff'];
    }

    /**
     * @return array{ok: bool, errors: list<string>, peso?: float, altura?: float}
     */
    private function validar(array $post): array
    {
        $errors = [];
        $pesoRaw = $post['peso'] ?? '';
        $alturaRaw = $post['altura'] ?? '';

        if ($pesoRaw === '' || $pesoRaw === null) {
            $errors[] = 'Informe o peso.';
        }
        if ($alturaRaw === '' || $alturaRaw === null) {
            $errors[] = 'Informe a altura.';
        }
        if ($errors !== []) {
            return ['ok' => false, 'errors' => $errors];
        }

        $peso = $this->parseFloatPositivo((string) $pesoRaw, 'peso', $errors);
        $altura = $this->parseFloatPositivo((string) $alturaRaw, 'altura', $errors);
        if ($errors !== []) {
            return ['ok' => false, 'errors' => $errors];
        }

        return ['ok' => true, 'errors' => [], 'peso' => $peso, 'altura' => $altura];
    }

    /** @param list<string> $errors */
    private function parseFloatPositivo(string $raw, string $campo, array &$errors): ?float
    {
        $n = str_replace(',', '.', trim($raw));
        if ($n === '' || !is_numeric($n)) {
            $errors[] = $campo === 'peso'
                ? 'O peso deve ser um número válido.'
                : 'A altura deve ser um número válido.';

            return null;
        }
        $v = (float) $n;
        if ($v <= 0.0) {
            $errors[] = $campo === 'peso'
                ? 'O peso deve ser positivo.'
                : 'A altura deve ser positiva.';

            return null;
        }

        return $v;
    }

    private function baseUrl(): string
    {
        $script = $_SERVER['SCRIPT_NAME'] ?? '/index.php';

        return rtrim(str_replace('\\', '/', dirname((string) $script)), '/');
    }

    /** @param array<string, mixed> $data */
    private function view(string $nome, array $data = []): void
    {
        $config = $this->config;
        $baseUrl = $this->baseUrl();
        $assetUrl = fn (string $path): string => $baseUrl . '/' . ltrim($path, '/');
        $routeUrl = fn (string $route): string => $baseUrl . '/index.php?route=' . rawurlencode($route);
        extract($data, EXTR_SKIP);
        $arquivo = dirname(__DIR__) . '/views/' . $nome . '.php';
        require $arquivo;
    }

    private function redirect(string $route): void
    {
        header('Location: ' . $this->baseUrl() . '/index.php?route=' . rawurlencode($route));
        exit;
    }
}
