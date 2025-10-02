<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <link rel="shortcut icon" href="../../imagens/logo1.png" type="image/x-icon">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Seus estilos existentes -->
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/css_aluno/exercicio.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../../templates/sidebar_aluno.php';
    ?>

    <!-- Conteúdo principal do exercício -->
    <main class="container py-5">
        <div class="card shadow-sm rounded-4 bg-white p-4 position-relative">

            <!-- Ícone de voltar -->
            <a href="javascript:history.back()" class="position-absolute top-0 start-0 m-3 text-dark" style="font-size: 1.5rem;">
                <i class="bi bi-arrow-left"></i>
            </a>

            <header class="mb-4">
                <div class="border-bottom shadow-sm pb-3" style="margin-left: -1.5rem; margin-right: -1.5rem;">
                    <h2 class="fw-bold text-center mb-1">Puxada na Frente (Passo a Passo)</h2>
                    <p class="text-center text-muted mb-0">Prepare-se para começar seu exercício</p>
                </div>
            </header>

            <!-- Corpo do exercício -->
            <div class="row justify-content-center">
                <!-- Coluna da imagem e botão -->
                <div class="col-md-6 text-center mb-4">
                    <img src="../../imagens/puxada_frente.png" class="img-fluid w-75 rounded mb-3" alt="Puxada na Frente">
                    <button class="btn btn-warning fw-bold px-4 py-2">
                        Iniciar Exercício <i class="bi bi-rocket ms-2"></i>
                    </button>
                </div>

                <!-- Coluna das instruções e mini cards dos parâmetros -->
                <div class="col-md-6">
                    <!-- Instruções -->
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">
                            ✅ <strong>Execução Escapular:</strong> Antes de puxar, puxe os ombros para baixo e para trás para ativar o Grande Dorsal.
                        </li>
                        <li class="list-group-item">
                            ✅ <strong>Foco nos Cotovelos:</strong> Puxe com os cotovelos e não com as mãos. Isso ajuda a ativar melhor o Grande Dorsal.
                        </li>
                        <li class="list-group-item">
                            ✅ <strong>Postura Fixa:</strong> Mantenha a coluna reta, o peito aberto e o tronco levemente inclinado para trás durante toda a execução.
                        </li>
                        <li class="list-group-item">
                            ✅ <strong>Fase Excêntrica Controlada:</strong> Suba o peso lentamente e de forma controlada para aumentar a eficiência do exercício.
                        </li>
                        <li class="list-group-item">
                            ✅ <strong>Amplitude Total:</strong> Puxe a barra até a altura do peito e os braços totalmente na subida (alongamento), mantendo o controle total.
                        </li>
                    </ul>

                    <!-- Mini cards dos parâmetros -->
                    <div class="row text-center g-2 mb-5">
                        <div class="col-6 col-lg-3">
                            <div class="bg-light border p-1 shadow-sm">
                                <i class="bi bi-list-check text-warning fs-5"></i>
                                <div class="small fw-bold mt-1">Séries</div>
                                <div class="small">3</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="bg-light border p-1 shadow-sm">
                                <i class="bi bi-repeat text-warning fs-5"></i>
                                <div class="small fw-bold mt-1">Repetições</div>
                                <div class="small">12</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="bg-light border p-1 shadow-sm">
                                <i class="bi bi-stopwatch text-warning fs-5"></i>
                                <div class="small fw-bold mt-1">Descanso</div>
                                <div class="small">3m</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="bg-light border p-1 shadow-sm">
                                <i class="bi bi-bar-chart text-warning fs-5"></i>
                                <div class="small fw-bold mt-1">Carga</div>
                                <div class="small">4kg</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mensagem motivacional -->
            <p class="text-center text-muted fs-5 mb-0">Bora treinar 💪 Você consegue!</p>
        </div>
    </main>

    <?php include '../../templates/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
</body>

</html>