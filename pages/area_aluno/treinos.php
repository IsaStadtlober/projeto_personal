<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinos</title>
    <link rel="shortcut icon" href="../../imagens/logo1.png" type="image/x-icon">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- TUI Calendar CSS -->
    <link rel="stylesheet" href="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.css">

    <!-- Seus estilos existentes -->
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/css_aluno/treinos.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../../templates/sidebar_aluno.php';
    ?>

    <main class="container-fluid px-5 py-4">
        <div class="mb-4">
            <h1 class="fw-bold">TREINOS</h1>
            <h2 class="text-muted">Bem-vindo, Diogo</h2>
        </div>

        <div class="row g-3 align-items-stretch">
            <!-- Calendário -->
            <div class="col-lg-4">
                <div class="card p-3 shadow-sm rounded-4 h-100 d-flex flex-column">
                    <div class="d-flex justify-content-center align-items-center gap-4 mb-4 mt-2">
                        <i id="prevMonth" class="bi bi-chevron-left fs-4 text-dark" style="cursor:pointer;"></i>
                        <h6 id="calendarTitle" class="fs-4 fw-bold mb-0">Março 2025</h6>
                        <i id="nextMonth" class="bi bi-chevron-right fs-4 text-dark" style="cursor:pointer;"></i>
                    </div>
                    <div id="calendarFull" class="calendar-container"></div>
                </div>
            </div>

            <!-- Próximos treinos -->
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-4 h-100 bg-white">
                    <!-- Header -->
                    <div class="card-header bg-white text-dark rounded-top-4">
                        <h6 class="mb-0 fs-3 fw-bold text-center">Próximos Treinos</h6>
                    </div>

                    <!-- Corpo com scroll interno limitado a 3 blocos -->
                    <div class="card-body px-4 py-3" style="max-height: 390px; overflow-y: auto;">
                        <!-- Bloco 1 -->
                        <div class="mb-3 p-3 rounded-4 bg-body-tertiary">
                            <h6 class="fw-bold fs-4 mb-2">Peito - Iniciante</h6>
                            <p class="text-muted mb-2"><i class="bi bi-calendar3"></i> 14 de Novembro</p>
                            <p class="text-muted mb-1"><i class="bi bi-clock"></i> 1:45 min</p>
                            <div class="d-flex align-items-center text-warning fs-6 mb-2 gap-2">
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="text-muted mb-1">Dificuldade</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-danger mx-3 px-5">Cancelar</button>
                                <button class="btn px-5" style="background-color: #fda126;">Reagendar</button>
                            </div>
                        </div>

                        <!-- Bloco 2 -->
                        <div class="mb-3 p-3 rounded-4 bg-body-tertiary">
                            <h6 class="fw-bold fs-4 mb-2">Perna - Iniciante</h6>
                            <p class="text-muted mb-2"><i class="bi bi-calendar3"></i> 15 de Novembro</p>
                            <p class="text-muted mb-1"><i class="bi bi-clock"></i> 1:55 min</p>
                            <div class="d-flex align-items-center text-warning fs-6 mb-2 gap-2">
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="text-muted mb-1">Dificuldade</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-danger mx-3 px-5">Cancelar</button>
                                <button class="btn px-5" style="background-color: #fda126;">Reagendar</button>
                            </div>
                        </div>
                        <!-- Bloco 3 -->
                        <div class="mb-3 p-3 rounded-4 bg-body-tertiary">
                            <h6 class="fw-bold fs-4 mb-2">Ombro - Iniciante</h6>
                            <p class="text-muted mb-2"><i class="bi bi-calendar3"></i> 14 de Novembro</p>
                            <p class="text-muted mb-1"><i class="bi bi-clock"></i> 1:45 min</p>
                            <div class="d-flex align-items-center text-warning fs-6 mb-2 gap-2">
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="text-muted mb-1">Dificuldade</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-danger mx-3 px-5">Cancelar</button>
                                <button class="btn px-5" style="background-color: #fda126;">Reagendar</button>
                            </div>
                        </div>
                        <!-- Bloco 4 (visível com rolagem) -->
                        <div class="mb-3 p-3 rounded-4 bg-body-tertiary">
                            <h6 class="fw-bold fs-4 mb-2">Braço - Iniciante</h6>
                            <p class="text-muted mb-2"><i class="bi bi-calendar3"></i> 14 de Novembro</p>
                            <p class="text-muted mb-1"><i class="bi bi-clock"></i> 1:45 min</p>
                            <div class="d-flex align-items-center text-warning fs-6 mb-2 gap-2">
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="text-muted mb-1">Dificuldade</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-danger mx-3 px-5">Cancelar</button>
                                <button class="btn px-5" style="background-color: #fda126;">Reagendar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Treino do dia -->
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-4 h-100">
                    <!-- Header interno -->
                    <div class="card-header bg-white text-dark rounded-top-4">
                        <h6 class="mb-0 fs-3 fw-bold text-center">Treino do dia</h6>
                    </div>

                    <!-- Corpo do card -->
                    <div class="card-body p-4">
                        <img src="../../imagens/peito_iniciante.png.png" class="img-fluid mx-auto d-block rounded-top mb-3" alt="Imagem do treino">

                        <p class="mb-2 fw-semibold text-dark fs-4">Treino Peito Iniciante</p>

                        <p class="mb-3 fs-6 text-muted">
                            Execute o movimento como se fosse sentar em uma cadeira, mantendo o abdômen contraído e as costas retas. Desça até que as coxas fiquem paralelas ao chão ou o máximo que sua mobilidade permitir.
                        </p>

                        <div class="mb-2 d-flex align-items-center fs-6">
                            <i class="bi bi-clock me-2 text-warning"></i>
                            <span class="text-dark">Duração: <strong>45 min</strong></span>
                        </div>
                        <div class="d-flex align-items-center text-warning fs-6 mb-2 gap-2">
                            <p class="text-muted mb-1">Dificuldade</p>
                            <div>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            
                        </div>

                        <button class="btn text-white w-100 fw-semibold" style="background-color:#f85e16f1 ;">Iniciar Treino</button>

                        <p class="text-success text-center mt-3 small">Você está quase 💪</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include '../../templates/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
    <script src="../../js/js_aluno/calendario.js"></script>
</body>

</html>