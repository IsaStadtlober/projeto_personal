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

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">

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
        <!-- Cabeçalho com título e saudação -->
        <div class="bg-body-tertiary rounded-4 px-4 py-3 mb-3">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-baseline gap-3">
                    <h1 class="fw-bold mb-0">TREINOS</h1>
                    <h2 class="fs-3 mb-0">Bem-vindo, Diogo</h2>
                </div>
            </div>
        </div>

        <div class="row g-3 align-items-stretch">
            <!-- Card do Calendário de Treinos -->
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-4 h-100 bg-white">
                    <!-- Header -->
                    <div class="card-header bg-white text-dark rounded-top-4 py-3 px-4">
                        <h6 class="mb-0 fs-3 fw-bold text-center">Calendário de Treinos</h6>
                    </div>

                    <!-- Corpo -->
                    <div class="card-body px-4 py-4">
                        <!-- Bloco com mês, ano e setas -->
                        <div class="rounded-4 p-4 mb-4 bg-light">
                            <div class="d-flex justify-content-center align-items-center gap-4">
                                <i id="prevMonth" class="bi bi-chevron-left fs-4 text-dark" style="cursor:pointer;"></i>
                                <h6 id="calendarTitle" class="fs-4 fw-bold mb-0">Março 2025</h6>
                                <i id="nextMonth" class="bi bi-chevron-right fs-4 text-dark" style="cursor:pointer;"></i>
                            </div>
                        </div>

                        <!-- Calendário -->
                        <div id="calendarFull" class="calendar-container w-100 mb-4"></div>

                        <!-- Bloco de progresso -->
                        <div class="border border-dark border-opacity-10 rounded-4 p-4 bg-white">
                            <h6 class="fw-semibold text-center mb-3 fs-5">Meta de treinos em andamento</h6>

                            <div class="progress rounded-pill" style="height: 10px;">
                                <div class="progress-bar progress-gradient text-white" role="progressbar"
                                    style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <!-- Texto fora do bloco -->
                        <p id="trainingMessage" class="text-dark text-center mt-3">Você treinou <strong>8 dias</strong> 🔥</p>
                    </div>
                </div>
            </div>

            <!-- Próximos treinos -->
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-4 h-100 bg-white">
                    <!-- Header -->
                    <div class="card-header bg-white text-dark rounded-top-4 p-3">
                        <h6 class="mb-0 fs-3 fw-bold text-center">Próximos Treinos</h6>
                    </div>

                    <!-- Corpo -->
                    <div class="card-body px-4 py-4">
                        <!-- Bloco 1 -->
                        <div class="mb-2 p-3 rounded-4 bg-body-tertiary">
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
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-outline-danger w-75 px-4">Cancelar</button>
                                <button class="btn btn-reagendar w-75 px-4">Reagendar</button>
                            </div>
                        </div>

                        <!-- Bloco 2 -->
                        <div class="mb-2 p-3 rounded-4 bg-body-tertiary">
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
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-outline-danger w-75 px-4">Cancelar</button>
                                <button class="btn btn-reagendar w-75 px-4">Reagendar</button>
                            </div>
                        </div>

                        <!-- Bloco 3 -->
                        <div class="mb-2 p-3 rounded-4 bg-body-tertiary">
                            <h6 class="fw-bold fs-4 mb-2">Costas - Intermediário</h6>
                            <p class="text-muted mb-2"><i class="bi bi-calendar3"></i> 17 de Novembro</p>
                            <p class="text-muted mb-1"><i class="bi bi-clock"></i> 2:00 min</p>
                            <div class="d-flex align-items-center text-warning fs-6 mb-2 gap-2">
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="text-muted mb-1">Dificuldade</p>
                            </div>
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-outline-danger w-75 px-4">Cancelar</button>
                                <button class="btn btn-reagendar w-75 px-4">Reagendar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Treino do dia -->
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-4 h-100">
                    <!-- Header -->
                    <div class="card-header bg-white text-dark rounded-top-4 p-3">
                        <h6 class="mb-0 fs-3 fw-bold text-center">Treino do dia</h6>
                    </div>

                    <!-- Corpo do card -->
                    <div class="card-body p-4">
                        <!-- Bloco da imagem -->
                        <div class="bg-body-tertiary rounded-4 p-5 mb-3 text-center">
                            <img src="../../imagens/peito_iniciante.png"
                                class="img-fluid mx-auto d-block rounded-top"
                                alt="Imagem do treino">
                        </div>

                        <!-- Bloco do título e descrição -->
                        <div class="bg-body-tertiary rounded-4 p-3 mb-3 text-center">
                            <p class="fw-semibold text-dark fs-4 mb-2">Peito - Iniciante</p>
                            <p class="fs-6 text-muted mb-0">
                                Hoje vamos fortalecer o peito e tríceps para melhorar a postura e força funcional.
                            </p>
                        </div>

                        <!-- Bloco da duração -->
                        <div class="bg-body-tertiary rounded-3 p-3 mb-3 text-center">
                            <div class="d-flex justify-content-center align-items-center fs-6">
                                <i class="bi bi-clock me-2 text-warning"></i>
                                <span class="text-dark">Duração: <strong>45 min</strong></span>
                            </div>
                        </div>

                        <!-- Bloco da dificuldade -->
                        <div class="bg-body-tertiary rounded-3 p-3 mb-5 text-center">
                            <div class="d-flex justify-content-center align-items-center text-warning fs-6 gap-2">
                                <p class="text-muted mb-1">Dificuldade</p>
                                <div>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Botão final -->
                        <button class="btn btn-iniciar w-100 fw-semibold mt-3">Iniciar Treino</button>
                        <p class="text-success text-center mt-3 small">Você está quase 💪</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include '../../templates/footer.php'; ?>

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
    <script src="../../js/js_aluno/calendario.js"></script>
</body>

</html>