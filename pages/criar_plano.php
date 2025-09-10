<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
    <title>Criar Planos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/criar_editar.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../templates/header.php'; ?>
    <?php include '../templates/sidebar.php'; ?>

    <main id="mainCriar" class="d-flex justify-content-center align-items-center min-vh-100 w-100 position-relative" style="margin-top: 70px;">
        <div class="card shadow-lg rounded-4 border-0" style="width: 620px; max-width: 95vw; min-height: 450px;">
            <div class="card-body p-5">
                <h2 class="card-title text-center fw-bold mb-2">CONFIGURAR PLANO</h2>
                <p class="text-center mb-5 text-muted">De um nome e uma descrição ao seu plano</p>
                <form>
                    <div class="mb-4">
                        <label for="nomePlano" class="form-label fw-semibold fs-5">Nome do plano</label>
                        <input type="text" class="form-control rounded-3" id="nomePlano" name="nomePlano"
                            placeholder="Ex: Treino de Força Avançado">
                    </div>
                    <div class="mb-4 mt-2">
                        <label for="objetivoPlano" class="form-label fw-semibold fs-5">Objetivo</label>
                        <input type="text" class="form-control rounded-3" id="objetivoPlano" name="objetivoPlano"
                            placeholder="Ex: Com esse plano você vai sair do nível...">
                    </div>
                    <div class="btn-group w-100 mb-4" role="group" aria-label="Tipo de ciclo">
                        <input type="radio" class="btn-check" name="ciclo" id="semanal" autocomplete="off" checked>
                        <label class="btn btn-outline-secondary" for="semanal">Semanal</label>
                        <input type="radio" class="btn-check" name="ciclo" id="mensal" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="mensal">Mensal</label>
                        <input type="radio" class="btn-check" name="ciclo" id="anual" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="anual">Anual</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-secondary rounded-3">Próximo</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
</body>

</html>