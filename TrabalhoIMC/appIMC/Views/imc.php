<?php
/** View do formulário de IMC; $erro vem de IMCController::formulario() (ex.: ?erro=1). */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>IMC (Índice de Massa Corporal)</title>
</head>

<body>
    <main class="container py-5">
        <h1 class="text-center mb-4">Cálculo do IMC <br>(Índice de Massa Corporal)</h1>

        <div class="d-flex justify-content-center">
            <!-- POST enviado ao front controller (index.php) para o método calcular -->
            <form class="col-12 col-md-8 col-lg-6" action="index.php?controle=IMCController&metodo=calcular" method="POST">
                <?php if ($erro): ?>
                    <div class="alert alert-danger" role="alert">
                        Informe peso e altura válidos para calcular o IMC.
                    </div>
                <?php endif; ?>

                <div class="mb-3 mt-3">
                    <label for="peso" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Entre com o peso. Ex.: 70,5" required>
                </div>

                <div class="mb-3">
                    <label for="altura" class="form-label">Altura:</label>
                    <input type="text" class="form-control" id="altura" name="altura" placeholder="Entre com a altura. Ex.: 1,75" required>
                </div>

                <button type="submit" id="calcular" class="btn btn-primary">Calcular IMC</button>
                <button type="reset" id="limpar" class="btn btn-danger">Limpar</button>
            </form>
        </div>
    </main>
</body>

</html>
