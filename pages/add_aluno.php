<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo1.png" type="image/x-icon">
    <title>Adicionar Alunos</title>
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
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../templates/sidebar.php';
    ?>
    <main id="mainCriar" class="d-flex justify-content-center align-items-center min-vh-100 w-100 position-relative">
        <div class="container my-5 pt-5">
            <div class="row justify-content-center">
                <!-- Card Inicial -->
                <div id="cardInicial" class="col-12 col-md-8 col-lg-6 mx-auto mt-4">
                    <div class="card shadow-lg rounded-4 border-0 p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center text-muted mb-4">
                                <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                <span class="px-3 fw-semibold">Passo 1 de 1</span>
                                <hr class="flex-grow-1 border-top border-secondary opacity-50">
                            </div>
                        <h2 class="card-title text-center fw-bold mb-2">ADICIONAR ALUNO</h2>
                            <p class="text-center mb-5 text-muted">Adicione um aluno em um plano</p>
                            <form id="formConfigurarPlano">
                                <div class="mb-4">
                                    <label for="nomePlano" class="form-label fw-semibold fs-5">PROCURE UM ALUNO (CPF)</label>
                                    <input type="text" class="form-control rounded-3" id="nomePlano" name="nomePlano"
                                        placeholder="Ex: XXX.XXX.XXX-XX">
                                </div>
                                <div class="mb-4 mt-2">
                                    <label for="objetivoPlano" class="form-label fw-semibold fs-5">PLANO DE TREINO</label>
                                    <select class="form-select mb-4" aria-label="Selecione a Semana">
                                        <option selected>Escolha o Plano</option>
                                        <option value="1">Plano 1</option>
                                    </select>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn text-white rounded-3" id="btnProximo" style="background-color: #f85e16f1;">Adicionar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
    <script></script>
</body>
</html>