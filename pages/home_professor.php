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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI']; // ou basename($_SERVER['PHP_SELF'])
    include '../templates/sidebar.php';
    ?>

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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body class="d-flex flex-column min-vh-100">
        <?php include '../templates/header.php'; ?>
        <?php
        $currentPage = $_SERVER['REQUEST_URI'];
        include '../templates/sidebar.php';
        ?>

        <main id="mainHome" class="dashboard-main">
            <div class="container mt-4">
                <div class="row">
                    <!-- COLUNA ESQUERDA -->
                    <div class="col-md-4 d-flex flex-column gap-3">
                        <!-- Planos Ativos -->
                        <div class="card status-card status-card-small card-planos-ativos">
                            <div class="card-body">
                                <h5 class="status-title">Planos Ativos</h5>
                                <div class="status-content">
                                    <span class="status-icon">📋</span>
                                    <span class="status-number">12</span>
                                </div>
                            </div>
                        </div>

                        <!-- Planos a Revisar -->
                        <div class="card status-card status-card-small card-planos-revisar">
                            <div class="card-body">
                                <h5 class="status-title">Planos a Revisar</h5>
                                <div class="status-content">
                                    <span class="status-icon">⏳</span>
                                    <span class="status-number">3</span>
                                </div>
                            </div>
                        </div>

                        <!-- Alertas importantes -->
                        <div class="card card-alertas">
                            <div class="card-body">
                                <h5 class="card-title text-warning">⚠️ Alertas importantes</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="mb-2"><span class="text-danger">❗</span> João está inativo há 7 dias -
                                        <small class="text-muted">04/09</small>
                                    </li>
                                    <li class="mb-2"><span class="text-warning">❗</span> Plano da Ana expira em 3 dias -
                                        <small class="text-muted">04/09</small>
                                    </li>
                                    <li class="mb-2"><span class="text-danger">❗</span> Lucas aumentou 2kg (meta era
                                        perder) - <small class="text-muted">01/09</small></li>
                                    <li class="mb-2"><span class="text-warning">⚠️</span> Maria atingiu 80% da meta de
                                        massa magra - <small class="text-muted">01/09</small></li>
                                    <li class="mb-2"><span class="text-warning">😕</span> Pedro relatou baixa motivação
                                        - <small class="text-muted">02/09</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- COLUNA DIREITA -->
                    <div class="col-md-8 d-flex flex-column gap-3">
                        <!-- Progresso + Top Alunos lado a lado -->
                        <div class="d-flex flex-wrap gap-3">
                            <!-- LINHA: Progresso + Top Alunos -->
                            <div class="row g-3">
                                <!-- Progresso -->
                                <div class="col-md-6">
                                    <div class="card card-progresso h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Progresso Geral dos Alunos</h5>
                                            <div class="grafico-legenda mb-2 d-flex justify-content-center gap-3">
                                                <div class="legenda-item"><span class="bolinha"
                                                        style="background-color: #ff9900ff;"></span> Iniciado</div>
                                                <div class="legenda-item"><span class="bolinha"
                                                        style="background-color: #aaaaaaff;"></span> Em andamento</div>
                                                <div class="legenda-item"><span class="bolinha"
                                                        style="background-color: #454545ff;"></span> Não iniciado</div>
                                            </div>
                                            <canvas id="graficoProgresso" width="180" height="180"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <!-- Top Alunos -->
                                <div class="col-md-6">
                                    <div class="card card-top-alunos h-80">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Top Alunos</h5>
                                            <canvas id="graficoTopAlunos" height="150"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LINHA: Feedback + Motivação -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="card card-feedback">
                                        <div class="card-body">
                                            <h5 class="card-title">Feedback dos Alunos</h5>
                                            <div class="d-flex justify-content-around fs-3">
                                                <span>😟</span>
                                                <span>😐</span>
                                                <span>😄</span>
                                            </div>
                                            <canvas id="graficoFeedback" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card card-motivacao">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Nível de Motivação Geral</h5>
                                            <div class="display-6 fw-bold text-black">2</div>
                                            <small class="text-muted">Escala de 0 a 5</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Atividade Recente -->
                            <div class="card card-atividade mt-n1">
                                <div class="card-body">
                                    <h5 class="card-title">📌 Atividade Recente</h5>
                                    <ul class="list-group list-group-flush mt-2">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Carlos bateu meta semanal de treinos</span>
                                            <small class="text-muted">Hoje às 08:40</small>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Isabelle concluiu treino em 25min</span>
                                            <small class="text-muted">Hoje às 08:25</small>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Novo aluno cadastrado: Fernanda Silva</span>
                                            <small class="text-muted">Ontem às 16:00</small>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Ricardo enviou feedback: "treino puxado, mas bom!"</span>
                                            <small class="text-muted">Ontem às 15:30</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

        <!-- Chart.js Script -->
        <script>
            const ctx = document.getElementById('graficoProgresso').getContext('2d');
            const graficoProgresso = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Iniciado', 'Em andamento', 'Não iniciado'],
                    datasets: [{
                        label: 'Progresso dos Alunos',
                        data: [40, 40, 20],
                        backgroundColor: ['#ff9900ff', '#aaaaaaff', '#454545ff'],
                        borderColor: '#fff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    cutout: '60%',
                    plugins: {
                        legend: { display: false },
                        title: { display: false }
                    }
                }
            });

            const ctxTop = document.getElementById('graficoTopAlunos').getContext('2d');

            new Chart(ctxTop, {
                type: 'bar',
                data: {
                    labels: ['Kauã', 'Isabella', 'Marcos'],
                    datasets: [{
                        label: 'Desempenho (%)',
                        data: [85, 74, 67],
                        backgroundColor: ['#ff9900ff', '#aaaaaaff', '#454545ff'],
                        borderRadius: 6,
                        barThickness: 20
                    }]
                },
                options: {
                    indexAxis: 'y',
                    scales: {
                        x: {
                            grid: {
                                display: false // 👈 remove linhas verticais
                            },
                            max: 100,
                            ticks: {
                                stepSize: 20
                            }
                        },
                        y: {
                            grid: {
                                display: false // 👈 remove linhas horizontais
                            },
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            callbacks: {
                                label: ctx => `${ctx.raw}%`
                            }
                        }
                    }
                }
            });

            const ctxFeedback = document.getElementById('graficoFeedback');
            if (ctxFeedback) {
                new Chart(ctxFeedback, {
                    type: 'bar',
                    data: {
                        labels: [''],
                        datasets: [{
                            data: [40],
                            backgroundColor: '#ff9900ff',
                            borderRadius: 6,
                            barThickness: 20
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        scales: {
                            x: { max: 100, grid: { display: false } },
                            y: { grid: { display: false } }
                        },
                        plugins: {
                            legend: { display: false },
                            tooltip: { enabled: false }
                        }
                    }
                });
            }
        </script>
        <?php include '../templates/footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../js/navbar-scroll.js"></script>
    </body>

    </html>