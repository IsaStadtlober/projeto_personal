<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagens/logo1.png" type="image/x-icon">
    <title>Home Professor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/home_professor.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<!-- OFFCANVAS FILTRO -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFiltro" aria-labelledby="offcanvasFiltroLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasFiltroLabel" class="offcanvas-title">Filtrar por Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group">
            <li class="list-group-item">
                <button class="list-group-item-action btn w-100 text-start">Todos</button>
            </li>
            <li class="list-group-item">
                <button class="list-group-item-action btn w-100 text-start">Isabelle Stadtlober</button>
            </li>
            <li class="list-group-item">
                <button class="list-group-item-action btn w-100 text-start">Maria Eduarda Almeida</button>
            </li>
            <li class="list-group-item">
                <button class="list-group-item-action btn w-100 text-start">Kauã de Almeida</button>
            </li>
            <li class="list-group-item">
                <button class="list-group-item-action btn w-100 text-start">Marcus do Vale</button>
            </li>
            <li class="list-group-item">
                <button class="list-group-item-action btn w-100 text-start">Lucrecia de Araujo</button>
            </li>
            <li class="list-group-item">
                <button class="list-group-item-action btn w-100 text-start">Gustavo</button>
            </li>
        </ul>
    </div>
</div>

<body class="d-flex flex-column min-vh-100">
    <?php include '../../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../../templates/sidebar_prof.php';
    ?>

    <main id="mainHome" class="dashboard-main">
        <div class="container-fluid mt-5">
            <button class="btn position-fixed" style="top: 90px; right: 20px; background-color: #ff7700ff;"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFiltro"
                aria-controls="offcanvasFiltro">
                Alunos
            </button>
            <!-- LINHA 1 -->
            <div class="row g-3 align-items-stretch justify-content-center">
                <!-- Bloco 1 -->
                <div class="col-10 col-lg-3 d-flex flex-column gap-2">
                    <div
                        class="card flex-fill w-100 h-100 d-flex align-items-center justify-content-center text-center p-3">
                        <div>
                            <h5 class="status-title fs-4 fw-bold">Planos Ativos</h5>
                            <div class="status-content">
                                <span class="status-icon fs-1 fw-bold">📋</span>
                                <span class=" status-number fs-1 fw-bold">12</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="card flex-fill w-100 h-100 d-flex align-items-center justify-content-center text-center p-3">
                        <div>
                            <h5 class="status-title fs-4 fw-bold">Planos a Revisar</h5>
                            <div class="status-content">
                                <span class="status-icon fs-1 fw-bold">⏳</span>
                                <span class=" status-number fs-1 fw-bold">3</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bloco 2 -->
                <div class="col-10 col-lg-3 d-flex">
                    <div
                        class="card flex-fill w-100 h-100 d-flex align-items-center justify-content-center text-center p-3">
                        <div>
                            <h5 class="card-title fs-4 fw-bold">Progresso Geral dos Alunos</h5>
                            <div class="grafico-legenda mb-2 d-flex justify-content-center gap-3">
                                <div class="legenda-item"><span class="bolinha"
                                        style="background-color: #ff9900ff;"></span> Iniciado</div>
                                <div class="legenda-item"><span class="bolinha"
                                        style="background-color: #aaaaaaff;"></span> Em andamento</div>
                                <div class="legenda-item"><span class="bolinha"
                                        style="background-color: #454545ff;"></span> Não iniciado</div>
                            </div>
                            <canvas id="graficoProgresso" class="w-100"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Bloco 3 -->
                <div class="col-10 col-lg-3 d-flex">
                    <div class="card flex-fill w-100 h-100 d-flex flex-column text-center p-3">
                        <h5 class="fs-4 fw-bold card-title">Top Alunos</h5>
                        <div class="w-100">
                            <canvas id="graficoTopAlunos" class="w-100"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Espaçamento entre linhas -->
                <div class="my-3"></div>

                <!-- LINHA 2 -->
                <div class="row g-3 align-items-stretch justify-content-center">
                    <!-- Bloco 1: Alertas importantes-->
                    <div class="col-10 col-lg-3 d-flex">
                        <div
                            class="card flex-fill w-100 h-100 d-flex align-items-center justify-content-start text-start p-3">
                            <div class="w-100">
                                <h5 class="fs-4 fw-bold card-title text-warning mb-3">⚠️ Alertas importantes</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <div>
                                                <span style="display:inline-block; width:1.5em; text-align:center;"
                                                    class="text-danger">❗</span>
                                                João está inativo há 7 dias
                                            </div>
                                            <small class="text-muted mt-1 align-self-end">04/09</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <div>
                                                <span style="display:inline-block; width:1.5em; text-align:center;"
                                                    class="text-warning">❗</span>
                                                Plano da Ana expira em 3 dias
                                            </div>
                                            <small class="text-muted mt-1 align-self-end">04/09</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <div>
                                                <span style="display:inline-block; width:1.5em; text-align:center;"
                                                    class="text-danger">❗</span>
                                                Lucas aumentou 2kg
                                            </div>
                                            <small class="text-muted mt-1 align-self-end">01/09</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <div>
                                                <span style="display:inline-block; width:1.5em; text-align:center;"
                                                    class="text-warning">⚠️</span>
                                                Maria atingiu 80% da meta
                                            </div>
                                            <small class="text-muted mt-1 align-self-end">01/09</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <div>
                                                <span style="display:inline-block; width:1.5em; text-align:center;"
                                                    class="text-warning">😕</span>
                                                Pedro relatou baixa motivação
                                            </div>
                                            <small class="text-muted mt-1 align-self-end">02/09</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Bloco 2 -->
                    <div class="col-10 col-lg-3 d-flex flex-column gap-2">
                        <div
                            class="card flex-fill w-100 h-100 d-flex align-items-center justify-content-center text-center p-3">
                            <div>
                                <h5 class="card-title fs-4 fw-bold">Feedback dos Alunos</h5>
                                <div class="d-flex justify-content-around fs-3">
                                    <span>😟</span>
                                    <span>😐</span>
                                    <span>😄</span>
                                </div>
                                <canvas id="graficoFeedback" class="w-100"></canvas>
                            </div>
                        </div>
                        <div
                            class="card flex-fill w-100 h-100 d-flex align-items-center justify-content-center text-center p-3">
                            <div>
                                <h5 class="card-title fs-4 fw-bold ">Motivação Geral</h5>
                                <div class="display-4 fw-bold text-black">2</div>
                                <small class="text-muted fs-6">Escala de 0 a 5</small>
                            </div>
                        </div>
                    </div>

                    <!-- Bloco 3: Atividade Recente ajustado -->
                    <div class="col-10 col-lg-3 d-flex">
                        <div
                            class="card flex-fill w-100 h-100 d-flex align-items-center justify-content-start text-start p-3">
                            <div class="w-100">
                                <h5 class="fs-4 fw-bold card-title mb-3">📌 Atividade Recente</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <span>Carlos bateu meta semanal de treinos</span>
                                            <small class="text-muted mt-1 align-self-end">Hoje às 08:40</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <span>Isabelle concluiu treino em 25min</span>
                                            <small class="text-muted mt-1 align-self-end">Hoje às 08:25</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <span>Novo aluno cadastrado: Fernanda Silva</span>
                                            <small class="text-muted mt-1 align-self-end">Ontem às 16:00</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="d-flex flex-column">
                                            <span>Ricardo enviou feedback: "treino puxado, mas bom!"</span>
                                            <small class="text-muted mt-1 align-self-end">Ontem às 15:30</small>
                                        </div>
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
        let chartProgresso;

        function ajustarGraficoProgresso() {
            const canvas = document.getElementById('graficoProgresso');
            const largura = window.innerWidth;
            const altura = window.innerHeight;

            // Altura proporcional à tela
            const alturaIdeal = largura <= 1152 ? 140 : Math.min(altura * 0.3, 300);
            canvas.style.height = `${alturaIdeal}px`;
            canvas.style.width = '100%';

            // Destroi gráfico anterior se existir
            if (chartProgresso) {
                chartProgresso.destroy();
            }

            // Cria o gráfico
            const ctx = canvas.getContext('2d');
            chartProgresso = new Chart(ctx, {
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
                    animation: {
                        duration: 0 // 👈 desativa animação para evitar bugs
                    },
                    cutout: '60%',
                    plugins: {
                        legend: { display: false },
                        title: { display: false }
                    }
                }
            });
        }

        // Executa ao carregar
        ajustarGraficoProgresso();

        // Atualiza ao redimensionar
        window.addEventListener('resize', ajustarGraficoProgresso);


        let chartTopAlunos; // variável global para armazenar o gráfico

        function ajustarGraficoTopAlunos() {
            const canvasTop = document.getElementById('graficoTopAlunos');
            const largura = window.innerWidth;
            const altura = window.innerHeight;

            // Ajusta altura proporcional
            const alturaIdeal = largura <= 1152 ? 140 : Math.min(altura * 0.35, 350);
            canvasTop.style.height = `${alturaIdeal}px`;
            canvasTop.style.width = '100%';

            // Se já existe um gráfico, destrói antes de recriar
            if (chartTopAlunos) {
                chartTopAlunos.destroy();
            }

            // Cria o gráfico
            const ctxTop = canvasTop.getContext('2d');
            chartTopAlunos = new Chart(ctxTop, {
                type: 'bar',
                data: {
                    labels: ['Kauã', 'Isabelle', 'Marcos'],
                    datasets: [{
                        label: 'Desempenho (%)',
                        data: [85, 74, 67],
                        backgroundColor: ['#ff9900ff', '#aaaaaaff', '#454545ff'],
                        borderRadius: 6,
                        barThickness: 20
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    indexAxis: 'y',
                    scales: {
                        x: {
                            grid: { display: false },
                            max: 100,
                            ticks: { stepSize: 20 }
                        },
                        y: {
                            grid: { display: false },
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
        }

        // Executa ao carregar
        ajustarGraficoTopAlunos();

        // Atualiza ao redimensionar
        window.addEventListener('resize', ajustarGraficoTopAlunos);

        let chartFeedback;

        function ajustarGraficoFeedback() {
            const canvas = document.getElementById('graficoFeedback');
            const largura = window.innerWidth;
            const altura = window.innerHeight;

            // Altura proporcional à tela
            const alturaIdeal = largura <= 1152 ? 55 : Math.min(altura * 0.15, 100);
            canvas.style.height = `${alturaIdeal}px`;
            canvas.style.width = '100%';

            // Destroi gráfico anterior se existir
            if (chartFeedback) {
                chartFeedback.destroy();
            }

            // Cria o gráfico
            const ctx = canvas.getContext('2d');
            chartFeedback = new Chart(ctx, {
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
                    responsive: true,
                    animation: {
                        duration: 0 // 👈 desativa animação
                    },
                    indexAxis: 'y',
                    scales: {
                        x: {
                            max: 100,
                            grid: { display: false }
                        },
                        y: {
                            grid: { display: false }
                        }
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: { enabled: false }
                    }
                }
            });
        }

        // Executa ao carregar
        ajustarGraficoFeedback();

        // Atualiza ao redimensionar
        window.addEventListener('resize', ajustarGraficoFeedback);
    </script>
    <?php include '../../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
</body>

</html>