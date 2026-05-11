<?php
/** @var array<string, mixed> $config */
/** @var callable $assetUrl */
/** @var callable $routeUrl */
/** @var int $redirectSeconds */

$imgDir = dirname(__DIR__) . '/assets/img/';
$logosCfg = $config['logos'] ?? [];
$fatec = $logosCfg['fatec'] ?? '';
$cps = $logosCfg['cps'] ?? '';
$dsm = $logosCfg['dsm'] ?? '';

$fatecSrc = ($fatec !== '' && is_file($imgDir . $fatec)) ? $assetUrl('assets/img/' . $fatec) : null;
$cpsSrc = ($cps !== '' && is_file($imgDir . $cps)) ? $assetUrl('assets/img/' . $cps) : null;
$dsmSrc = ($dsm !== '' && is_file($imgDir . $dsm)) ? $assetUrl('assets/img/' . $dsm) : null;

$redirectTarget = $routeUrl('imc');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="refresh" content="<?= (int) $redirectSeconds ?>;url=<?= htmlspecialchars($redirectTarget, ENT_QUOTES, 'UTF-8') ?>" />
    <title>SplashScreen — <?= htmlspecialchars((string) ($config['app_name'] ?? 'IMC'), ENT_QUOTES, 'UTF-8') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= htmlspecialchars($assetUrl('assets/css/app.css'), ENT_QUOTES, 'UTF-8') ?>" />
</head>

<body class="d-flex flex-column justify-content-between vh-100 splash-body">

    <header class="d-flex justify-content-between align-items-center header border-bottom splash-header">
        <div>
            <?php if ($fatecSrc): ?>
                <img src="<?= htmlspecialchars($fatecSrc, ENT_QUOTES, 'UTF-8') ?>" alt="Fatec Jahu" height="60" />
            <?php else: ?>
                <span class="text-muted small">Logo Fatec (<?= htmlspecialchars($fatec, ENT_QUOTES, 'UTF-8') ?> em assets/img)</span>
            <?php endif; ?>
        </div>
        <div class="mx-auto text-center">
            <?php if ($cpsSrc): ?>
                <img src="<?= htmlspecialchars($cpsSrc, ENT_QUOTES, 'UTF-8') ?>" alt="Centro Paula Souza" height="60" />
            <?php else: ?>
                <span class="text-muted small">Logo CPS em assets/img</span>
            <?php endif; ?>
        </div>
        <div>
            <?php if ($dsmSrc): ?>
                <img src="<?= htmlspecialchars($dsmSrc, ENT_QUOTES, 'UTF-8') ?>" alt="CST DSM Fatec Jahu" height="60" />
            <?php else: ?>
                <span class="text-muted small">Logo DSM (<?= htmlspecialchars($dsm, ENT_QUOTES, 'UTF-8') ?>)</span>
            <?php endif; ?>
        </div>
    </header>

    <main class="d-flex flex-column justify-content-center align-items-center flex-grow-1 splash-main">
        <h1 class="fw-bold mb-4"><?= htmlspecialchars((string) ($config['app_name'] ?? 'IMC'), ENT_QUOTES, 'UTF-8') ?></h1>
        <i class="fas fa-spinner fa-spin splash-spinner" aria-hidden="true"></i>
        <h3 class="fw-bold mb-4 text-center"><?= htmlspecialchars((string) ($config['curso'] ?? ''), ENT_QUOTES, 'UTF-8') ?></h3>
        <p class="text-center"><strong><?= htmlspecialchars((string) ($config['student_name'] ?? ''), ENT_QUOTES, 'UTF-8') ?></strong></p>
        <p class="text-center">
            Professor: <?= htmlspecialchars((string) ($config['professor'] ?? ''), ENT_QUOTES, 'UTF-8') ?><br />
            Disciplina: <?= htmlspecialchars((string) ($config['disciplina'] ?? ''), ENT_QUOTES, 'UTF-8') ?>.
        </p>
        <p class="text-muted small">Redirecionando em <?= (int) $redirectSeconds ?>s…
            <a href="<?= htmlspecialchars($redirectTarget, ENT_QUOTES, 'UTF-8') ?>">Ir agora</a>
        </p>
    </main>

    <footer class="footer text-center splash-footer">
        <p>&copy; Todos os direitos reservados. Faculdade de Tecnologia de Jahu, <?= date('Y') ?>.</p>
    </footer>
</body>

</html>
