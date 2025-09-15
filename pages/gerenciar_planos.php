<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo1.png" type="image/x-icon">
    <title>Gerenciar Planos</title>
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
    <?php
    $currentPage = $_SERVER['REQUEST_URI']; // ou basename($_SERVER['PHP_SELF'])
    include '../templates/sidebar.php';
    ?>

    <main class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap px-4">
                        <div class="py-4">
                            <h5 class="mb-0 fw-bold fs-4">GERENCIAR PLANOS</h5>
                            <p class="mb-0 text-muted fs-6">Organize e monitore seus planos e alunos</p>
                        </div>
                        <div class="row g-2 mt-2 mt-lg-0">
                            <div class="col-auto">
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0">
                                        <i class="bi bi-search text-secondary"></i>
                                    </span>
                                    <input type="text" class="form-control border-start-0" placeholder="PESQUISAR PLANOS..." style="min-width: 250px;">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn text-white rounded-2 d-flex align-items-center gap-1 px-4 py-1" style="background-color: #f85e16;">
                                    <i class="bi bi-plus-lg fs-6"></i>
                                    Criar Plano
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr class="fs-5">
                                        <th>Nome do Plano</th>
                                        <th>N° De Alunos</th>
                                        <th>Status</th>
                                        <th class="text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Muay thay avançado</td>
                                        <td>2</td>
                                        <td><span class="badge bg-success rounded-5 fw-light fs-6">Ativo</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-outline-secondary me-1 mt-2"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary me-1 mt-2"><i class="bi bi-person-plus"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary mt-2"><i class="bi bi bi-people-fill"></i></button>
                                            <button class="btn btn-sm btn-outline-danger mt-2"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Boxe avançado</td>
                                        <td>12</td>
                                        <td><span class="badge bg-danger rounded-5 fw-light fs-6">Excluído</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-outline-secondary me-1 mt-2"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary me-1 mt-2"><i class="bi bi-person-plus"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary mt-2"><i class="bi bi bi-people-fill"></i></button>
                                            <button class="btn btn-sm btn-outline-danger mt-2"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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