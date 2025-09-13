<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo1.png" type="image/x-icon">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/home_professor.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI']; // ou basename($_SERVER['PHP_SELF'])
    include '../templates/sidebar.php';
    ?>

    <main id="mainHome" class="dashboard-main">
        <div class="container mt-4">
            <div class="row">
                <!-- Coluna esquerda com 3 cards empilhados -->
                <div class="col-md-4">
                    <div class="card status-card status-card-small mb-3">
                        <div class="card-body">
                            <h5 class="status-title">Planos Ativos</h5>
                            <div class="status-content">
                                <span class="status-icon">📋</span>
                                <span class="status-number">12</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card: Planos a Revisar -->
                    <div class="card status-card status-card-small mb-3">
                        <div class="card-body">
                            <h5 class="status-title">Planos a Revisar</h5>
                            <div class="status-content">
                                <span class="status-icon">⏳</span>
                                <span class="status-number">3</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card: Alertas importantes (AQUI o ajuste principal) -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-warning">⚠️ Alertas importantes</h5>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">
                                    <span class="text-danger">❗</span> João está inativo há 7 dias - <small
                                        class="text-muted">04/09</small>
                                </li>
                                <li class="mb-2">
                                    <span class="text-warning">❗</span> Plano da Ana expira em 3 dias - <small
                                        class="text-muted">04/09</small>
                                </li>
                                <li class="mb-2">
                                    <span class="text-danger">❗</span> Lucas aumentou 2kg (meta era perder) - <small
                                        class="text-muted">01/09</small>
                                </li>
                                <li class="mb-2">
                                    <span class="text-warning">⚠️</span> Maria atingiu 80% da meta de massa magra -
                                    <small class="text-muted">01/09</small>
                                </li>
                                <li class="mb-2">
                                    <span class="text-warning">😕</span> Pedro relatou baixa motivação - <small
                                        class="text-muted">02/09</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Aqui você adiciona outras colunas com col-md-8 ou col-md-4 dependendo do layout -->
                <div class="col-md-8">
                    <!-- Outros cards do dashboard -->
                </div>
            </div>
        </div>
    </main>

    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
</body>

</html>