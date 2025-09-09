<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../templates/header.php'; ?>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
        <div class="offcanvas-header">
            <div class="d-flex align-items-center">
                <img src="imagens/logo.png" alt="Logo" style="height: 30px;">
                <span class="fs-4 fw-bold ms-2">TAU<span class="text-warning">RUS</span></span>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
        </div>

        <div class="offcanvas-body px-3">
            <ul class="nav flex-column mt-4">
                <li class="nav-item mb-3" style="font-size: 18px;">
                    <a class="nav-link text-secondary" href="home_professor.php">
                        <i class="bi bi-house-door me-2"></i> Home
                    </a>
                </li>
                <li class="nav-item mb-3" style="font-size: 18px;">
                    <a class="nav-link text-secondary" href="chat.php">
                        <i class="bi bi-chat-dots me-2"></i> Chat
                    </a>
                </li>
                <li class="nav-item mb-3" style="font-size: 18px;">
                    <a class="nav-link text-secondary" href="adicionar_aluno.php">
                        <i class="bi bi-person-plus me-2"></i> Adicionar Aluno
                    </a>
                </li>
                <li class="nav-item mb-3" style="font-size: 18px;">
                    <a class="nav-link text-secondary" href="editar_planos.php">
                        <i class="bi bi-pencil-square me-2"></i> Editar Planos
                    </a>
                </li>
                <li class="nav-item mb-3" style="font-size: 18px;">
                    <a class="nav-link text-secondary" href="gerenciar_planos.php">
                        <i class="bi bi-journal-text me-2"></i> Gerenciar Planos
                    </a>
                </li>
                <li class="nav-item mb-3" style="font-size: 18px;">
                    <a class="nav-link text-secondary" href="progresso_alunos.php">
                        <i class="bi bi-bar-chart-line me-2"></i> Progresso Alunos
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
</body>

</html>