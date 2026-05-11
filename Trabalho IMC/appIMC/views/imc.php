<?php
$pageTitle = $pageTitle ?? ($config['app_name'] ?? 'IMC');
/** @var list<string> $errors */
/** @var string $oldPeso */
/** @var string $oldAltura */
/** @var callable $assetUrl */
/** @var callable $routeUrl */

require __DIR__ . '/partials/layout_head.php';
?>

    <h1 class="text-center imc-title">
        Cálculo do IMC <br /><span class="imc-sub">(Índice de Massa Corporal)</span>
    </h1>

    <div class="d-flex justify-content-center px-3">
        <div class="w-100 imc-form-wrap">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        <?php foreach ($errors as $err): ?>
                            <li><?= htmlspecialchars($err, ENT_QUOTES, 'UTF-8') ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form class="imc-form" action="<?= htmlspecialchars($routeUrl('calcular'), ENT_QUOTES, 'UTF-8') ?>" method="post" novalidate>
                <div class="mb-3 mt-3">
                    <label for="peso" class="form-label">Peso (kg):</label>
                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Ex.: 70,5"
                        value="<?= htmlspecialchars($oldPeso, ENT_QUOTES, 'UTF-8') ?>" />
                </div>
                <div class="mb-3">
                    <label for="altura" class="form-label">Altura (m):</label>
                    <input type="text" class="form-control" id="altura" name="altura" placeholder="Ex.: 1,75"
                        value="<?= htmlspecialchars($oldAltura, ENT_QUOTES, 'UTF-8') ?>" />
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn btn-primary">Calcular IMC</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </div>
    </div>

<?php require __DIR__ . '/partials/layout_foot.php'; ?>
