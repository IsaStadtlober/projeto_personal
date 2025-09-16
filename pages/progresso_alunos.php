<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo1.png" type="image/x-icon">
    <title>Progresso Aluno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/progresso_aluno.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../templates/sidebar.php';
    ?>

    <!-- <main class="container mt-5 pt-5 position-relative">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDireita" aria-controls="offcanvasDireita">
                Abrir Painel
            </button>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDireita" aria-labelledby="offcanvasDireitaLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDireitaLabel">Painel Lateral Direito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
            </div>
            <div class="offcanvas-body">
                <p>Conteúdo do painel lateral direito.</p>
                <!-- Você pode adicionar formulários, links, gráficos, etc. aqui -->
            </div>
        </div>
    </main> -->


    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
</body>

</html>