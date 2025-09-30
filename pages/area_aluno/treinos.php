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
                <div class="card p-3 shadow-sm rounded-4 h-100">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <button id="prevMonth" class="btn btn-sm btn-outline-secondary"><i
                                class="bi bi-chevron-left"></i></button>
                        <h6 id="calendarTitle" class="mb-3 mt-1 fs-4 fw-bold text-center flex-grow-1">Março 2025</h6>
                        <button id="nextMonth" class="btn btn-sm btn-outline-secondary"><i
                                class="bi bi-chevron-right"></i></button>
                    </div>
                    <div id="calendar" style="height: 260px;"></div>
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
                    <div class="card-body px-4 py-3">
                        <!-- Bloco 1 -->
                        <div class="mb-3 p-3 rounded-4 bg-body-tertiary text-center">
                            <h6 class="fw-bold mb-1">Treino A</h6>
                            <p class="text-muted mb-3">14 de Novembro</p>
                            <button class="btn btn-sm btn-outline-danger">Cancelar</button>
                        </div>

                        <!-- Bloco 2 -->
                        <div class="mb-3 p-3 rounded-4 bg-body-tertiary text-center">
                            <h6 class="fw-bold mb-1">Treino A</h6>
                            <p class="text-muted mb-3">15 de Novembro</p>
                            <button class="btn btn-sm btn-outline-danger">Cancelar</button>
                        </div>

                        <!-- Bloco 3 -->
                        <div class="mb-3 p-3 rounded-4 bg-body-tertiary text-center">
                            <h6 class="fw-bold mb-1">Treino A</h6>
                            <p class="text-muted mb-3">16 de Novembro</p>
                            <button class="btn btn-sm btn-outline-danger">Cancelar</button>
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
                        <p class="mb-2 fw-semibold text-dark fs-4">Treino peito iniciante</p>

                        <p class="mb-3 fs-6 text-muted">
                            Execute o movimento como se fosse sentar em uma cadeira, mantendo o abdômen contraído e as
                            costas retas. Desça até que as coxas fiquem paralelas ao chão ou o máximo que sua mobilidade
                            permitir.
                        </p>

                        <div class="mb-2 d-flex align-items-center fs-6">
                            <i class="bi bi-clock me-2 text-warning"></i>
                            <span class="text-dark">Duração: <strong>45 min</strong></span>
                        </div>

                        <div class="mb-3 d-flex align-items-center fs-6">
                            <span class="me-2 text-dark">Dificuldade:</span>
                            <span class="text-warning">⭐☆☆</span>
                        </div>

                        <button class="btn text-white w-100 fw-semibold" style="background-color:#f85e16f1 ;">Iniciar
                            Treino</button>

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