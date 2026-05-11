<?php
$pageTitle = $pageTitle ?? 'Resultados Finais';
/** @var array<string, mixed> $config */
/** @var string $pesoFormatado */
/** @var string $alturaFormatada */
/** @var string $imcFormatado */
/** @var array{mensagem: string, background: string, color: string} $recomendacao */
/** @var array{background: string, color: string} $classStyles */
/** @var string $fraseResultado */
/** @var callable $assetUrl */
/** @var callable $routeUrl */

$imgDir = dirname(__DIR__) . '/assets/img/';
$tableFile = $config['imc_table_image'] ?? 'tabelaimc.png';
$tableSrc = is_file($imgDir . $tableFile) ? $assetUrl('assets/img/' . $tableFile) : null;

$recomendacaoClass = ($recomendacao['background'] ?? '') === 'vermelho' ? 'recomendacao regime-precisa' : 'recomendacao regime-ok';

require __DIR__ . '/partials/layout_head.php';
?>

    <h1 class="text-center imc-title">Resultados Finais</h1>

    <div class="d-flex justify-content-center px-3">
        <div class="container mb-3 mt-3 resultado-wrap">
            <p class="mb-2"><span class="form-label fw-semibold">Altura:</span>
                <?= htmlspecialchars($alturaFormatada, ENT_QUOTES, 'UTF-8') ?> m</p>
            <p class="mb-2"><span class="form-label fw-semibold">Peso:</span>
                <?= htmlspecialchars($pesoFormatado, ENT_QUOTES, 'UTF-8') ?> kg</p>
            <p class="mb-3"><span class="form-label fw-semibold">IMC:</span>
                <?= htmlspecialchars($imcFormatado, ENT_QUOTES, 'UTF-8') ?></p>

            <?php if ($tableSrc): ?>
                <figure class="text-center mb-4">
                    <img src="<?= htmlspecialchars($tableSrc, ENT_QUOTES, 'UTF-8') ?>" class="img-fluid imc-table-img" alt="Tabela IMC" />
                </figure>
            <?php endif; ?>

            <div class="mb-2">
                <span class="h6">Tabela de Classificação do IMC</span>
            </div>
            <div class="table-responsive">
                <table class="table table-primary table-striped resultado-table">
                    <thead>
                        <tr>
                            <th>Classificação</th>
                            <th>IMC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Abaixo do Peso Normal</td>
                            <td>Abaixo de 19</td>
                        </tr>
                        <tr>
                            <td>Peso Normal</td>
                            <td>19,1 — 24,9</td>
                        </tr>
                        <tr>
                            <td>Sobrepeso</td>
                            <td>25 — 29,9</td>
                        </tr>
                        <tr>
                            <td>Obesidade Grau I</td>
                            <td>30 — 34,9</td>
                        </tr>
                        <tr>
                            <td>Obesidade Grau II</td>
                            <td>35 — 39,9</td>
                        </tr>
                        <tr>
                            <td>Obesidade Grau III ou Obesidade Mórbida</td>
                            <td>Maior ou igual a 40</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="fw-semibold mt-4 mb-2">Resultado do IMC:</p>
            <div class="container mb-3 py-3 px-3 rounded resultado-faixa" style="background-color: <?= htmlspecialchars($classStyles['background'], ENT_QUOTES, 'UTF-8') ?>; color: <?= htmlspecialchars($classStyles['color'], ENT_QUOTES, 'UTF-8') ?>;">
                <p id="classificacao" class="mb-0"><?= htmlspecialchars($fraseResultado, ENT_QUOTES, 'UTF-8') ?></p>
            </div>

            <p class="fw-semibold mt-4 mb-2">Recomendação:</p>
            <div class="container mb-3 py-3 px-3 rounded <?= htmlspecialchars($recomendacaoClass, ENT_QUOTES, 'UTF-8') ?>">
                <p id="recomendacao" class="mb-0"><?= htmlspecialchars($recomendacao['mensagem'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
            </div>

            <p class="mt-4 mb-2"><a href="<?= htmlspecialchars($routeUrl('imc'), ENT_QUOTES, 'UTF-8') ?>" class="btn btn-outline-primary">Novo cálculo</a></p>
        </div>
    </div>

<?php require __DIR__ . '/partials/layout_foot.php'; ?>
