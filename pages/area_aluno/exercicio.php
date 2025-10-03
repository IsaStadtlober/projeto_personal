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
    <main class="container py-5 flex-grow-1">
        <div class="card shadow-sm rounded-4 bg-white px-5 py-4 position-relative">

            <!-- Ícone de voltar -->
            <a href="javascript:history.back()" class="position-absolute top-0 start-0 m-3 text-dark" style="font-size: 1.5rem;">
                <i class="bi bi-arrow-left"></i>
            </a>

            <header class="mb-5" style="margin-left: -3rem; margin-right: -3rem;">
                <div class="border-bottom shadow-sm pb-3">
                    <h2 class="fw-bold text-center mb-1">Puxada na Frente (Passo a Passo)</h2>
                    <p class="text-center text-muted mb-0">Prepare-se para começar seu exercício</p>
                </div>
            </header>

            <!-- Corpo do exercício alinhado -->
            <div class="row align-items-start g-2 mb-5">
                <!-- Coluna da imagem e botão -->
                <div class="col-lg-6 d-flex flex-column align-items-center justify-content-start">
                    <img src="../../imagens/puxada_frente.png" class="img-fluid w-75 rounded mb-3" alt="Puxada na Frente">
                </div>

                <!-- Coluna das instruções e mini cards dos parâmetros -->
                <div class="col-lg-6">
                    <!-- Instruções sem linhas e com ícone de seta verde -->
                    <div class="mb-4">
                        <p class="mb-2">
                            <i class="bi bi-check2 text-success me-2"></i>
                            <strong>Execução Escapular:</strong> Antes de puxar, puxe os ombros para baixo e para trás para ativar o Grande Dorsal.
                        </p>
                        <p class="mb-2">
                            <i class="bi bi-check2 text-success me-2"></i>
                            <strong>Foco nos Cotovelos:</strong> Puxe com os cotovelos e não com as mãos. Isso ajuda a ativar melhor o Grande Dorsal.
                        </p>
                        <p class="mb-2">
                            <i class="bi bi-check2 text-success me-2"></i>
                            <strong>Postura Fixa:</strong> Mantenha a coluna reta, o peito aberto e o tronco levemente inclinado para trás durante toda a execução.
                        </p>
                        <p class="mb-2">
                            <i class="bi bi-check2 text-success me-2"></i>
                            <strong>Fase Excêntrica Controlada:</strong> Suba o peso lentamente e de forma controlada para aumentar a eficiência do exercício.
                        </p>
                        <p class="mb-0">
                            <i class="bi bi-check2 text-success me-2"></i>
                            <strong>Amplitude Total:</strong> Puxe a barra até a altura do peito e os braços totalmente na subida (alongamento), mantendo o controle total.
                        </p>
                    </div>

                    <!-- Mini cards dos parâmetros -->
                    <div class="row text-center g-2 g-lg-4 mb-3">
                        <div class="col-12 col-sm-6 col-lg-3 mb-2 mb-lg-0">
                            <div class="mini-card d-flex flex-column justify-content-center align-items-center bg-light border shadow-sm p-2 mx-auto rounded">
                                <i class="bi bi-list-check text-warning fs-2"></i>
                                <div class="small fw-bold">Séries</div>
                                <div class="small">3</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mb-2 mb-lg-0">
                            <div class="mini-card d-flex flex-column justify-content-center align-items-center bg-light border shadow-sm p-2 mx-auto rounded">
                                <i class="bi bi-repeat text-warning fs-2"></i>
                                <div class="small fw-bold">Repetições</div>
                                <div class="small">12</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mb-2 mb-lg-0">
                            <div class="mini-card d-flex flex-column justify-content-center align-items-center bg-light border shadow-sm p-2 mx-auto rounded">
                                <i class="bi bi-stopwatch text-warning fs-2"></i>
                                <div class="small fw-bold">Descanso</div>
                                <div class="small">3m</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mb-2 mb-lg-0">
                            <div class="mini-card d-flex flex-column justify-content-center align-items-center bg-light border shadow-sm p-2 mx-auto rounded">
                                <i class="bi bi-bar-chart text-warning fs-2"></i>
                                <div class="small fw-bold">Carga</div>
                                <div class="small">4kg</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botão de iniciar exercício -->
            <div class="text-center mb-3">
                <button class="btn btn-warning text-white fw-bold fs-5 w-50" onclick="mostrarCronometro()">
                    Iniciar Exercício <i class="bi bi-rocket ms-2"></i>
                </button>
            </div>

            <!-- Cronômetro (inicialmente oculto) -->
            <div id="cronometroContainer" class="text-center mt-4" style="display: none;">
                <h5 class="fw-bold mb-3">Cronômetro</h5>
                <div id="cronometroDisplay" class="fs-2 fw-bold border rounded-circle px-5 py-3 d-inline-block bg-light text-dark">
                    00:00
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-secondary me-2" onclick="cronometro.pause()">Pausar</button>
                    <button class="btn btn-outline-success me-2" onclick="cronometro.resume()">Retomar</button>
                    <button class="btn btn-danger" onclick="finalizarCronometro()">Finalizar</button>
                </div>
            </div>
        </div>
    </main>

    <?php include '../../templates/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
    <script src="../../js/js_aluno/cronometro.js"></script>
</body>

</html>