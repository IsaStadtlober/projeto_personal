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

    <main class="container" style="margin-top: 140px; margin-bottom: 80px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap px-4">
                        <div class="py-4">
                            <h5 class="mb-0 fw-bold fs-3">Progresso do Aluno</h5>
                            <p class="mb-0 text-muted fs-5">Selecione um Aluno</p>
                        </div>
                        <div class="row g-2 mt-2 mt-lg-0">
                            <!-- Campo de busca -->
                            <div class="col-auto">
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0">
                                        <i class="bi bi-search text-secondary"></i>
                                    </span>
                                    <input type="text" class="form-control border-start-0" placeholder="PESQUISAR ALUNO..." style="min-width: 250px;">
                                </div>
                            </div>

                            <!-- Filtro de grupo com estilo -->
                            <div class="col-auto">
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0">
                                        <i class="bi bi-filter text-secondary"></i>
                                    </span>
                                    <select class="form-select form-select-sm border-start-0" style="min-width: 140px;">
                                        <option selected>Filtrar por Grupo</option>
                                        <option>Muay Thai</option>
                                        <option>Funcional</option>
                                        <option>Boxe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold mt-3 mb-0 fs-5 px-2">Alunos</h5>
                        <hr class="mb-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item py-3 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                                    <span class="fw-semibold">Isabelle</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Ver progresso">
                                        <i class="bi bi-bar-chart-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir aluno">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="list-group-item py-3 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                                    <span class="fw-semibold">Lucrecia</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Ver progresso">
                                        <i class="bi bi-bar-chart-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir aluno">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="list-group-item py-3 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                                    <span class="fw-semibold">Maria Eduarda</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Ver progresso">
                                        <i class="bi bi-bar-chart-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir aluno">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="list-group-item py-3 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                                    <span class="fw-semibold">Kauã</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Ver progresso">
                                        <i class="bi bi-bar-chart-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir aluno">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="list-group-item py-3 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                                    <span class="fw-semibold">Marcus</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Ver progresso">
                                        <i class="bi bi-bar-chart-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" title="Excluir aluno">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
</body>

</html>