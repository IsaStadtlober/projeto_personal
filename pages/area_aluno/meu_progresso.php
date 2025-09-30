<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagens/logo1.png" type="image/x-icon">
    <title>Meu Progresso</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/css_aluno/meu_progresso.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../../templates/sidebar_aluno.php';
    ?>

    <main style="margin-top: 80px;">
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                <div class="col-12 col-lg-4 d-flex flex-column gap-2">

                    <!-- Peso -->
                    <div class="card flex-fill w-100 h-100 p-3">
                        <h5 class="card-title fw-bold">Peso (Kg)</h5>
                        <canvas id="pesoChart" height="200"></canvas>
                    </div>

                    <!-- Frequência de Treino -->
                    <div class="card flex-fill w-100 h-100 p-3">
                        <h5 class="card-title fw-bold">Frequência de Treino</h5>
                        <canvas id="frequenciaChart" height="200"></canvas>
                    </div>

                </div>

                <div class="col-12 col-lg-3 d-flex flex-column gap-2">

                    <!-- Chat com Professor -->
                    <div class="card flex-fill w-100 h-100 p-3">
                        <h5 class="card-title fw-bold">Chat com o Professor</h5>
                        <div class="bg-light rounded p-3 mb-3 text-start">
                            Ótimo progresso no supino esta semana!<br>
                            Continue focado 💪
                        </div>
                        <div class="bg-light rounded p-3 mt-2 mb-5">
                            Valeu, professor! Tô focado 💪
                        </div>
                        <input type="text" id="respostaProfessor" class="form-control mb-2" placeholder="Responder...">
                    </div>

                    <!-- Frequência Mensal -->
                    <div class="card flex-fill w-100 h-100 p-3">
                        <h5 class="card-title fw-bold">Frequência Mensal - Novembro</h5>
                        <div id="calendar" class="d-flex flex-wrap gap-1"></div>
                        <p class="mt-3 mb-0">Você treinou 8 dias em Novembro 💥</p>
                        <div class="d-flex align-items-center mt-2">
                            <div style="width: 20px; height: 20px; background-color: orange;" class="me-2 rounded"></div> <span>Dia com treino</span>
                            <div style="width: 20px; height: 20px; background-color: #dee2e6;" class="ms-4 me-2 rounded"></div> <span>Dia sem treino</span>
                        </div>
                    </div>

                </div>

                <!-- Coluna 2: Bioimpedância + Metas -->
                <div class="col-12 col-lg-4 d-flex flex-column gap-2">

                    <!-- Bioimpedância -->
                    <div class="card flex-fill w-100 h-100 p-3">
                        <h5 class="card-title fw-bold">Progresso Bioimpedância</h5>
                        <canvas id="bioChart" height="200"></canvas>
                    </div>

                    <!-- Metas -->
                    <div class="card flex-fill w-100 h-100 p-3">
                        <h5 class="card-title fw-bold">Minhas Metas</h5>

                        <p>Perder 15kg</p>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" style="width: 40%;">6kg</div>
                        </div>

                        <p>-20% de Gordura</p>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" style="width: 60%;">12%</div>
                        </div>

                        <p>Correr 10km</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 80%;">8km</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Gera os dias do calendário dinamicamente
        const calendar = document.getElementById('calendar');
        const activeDays = [1, 3, 5, 10, 12, 15, 20, 22];

        for (let i = 1; i <= 30; i++) {
            const dayDiv = document.createElement('div');
            dayDiv.classList.add('rounded', 'm-1');
            dayDiv.style.width = '20px';
            dayDiv.style.height = '20px';
            dayDiv.style.backgroundColor = activeDays.includes(i) ? 'orange' : '#dee2e6';
            calendar.appendChild(dayDiv);
        }

        // Peso Chart
        new Chart(document.getElementById('pesoChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar'],
                datasets: [{
                    label: 'Peso',
                    data: [85, 82, 78],
                    borderColor: 'orange',
                    backgroundColor: 'rgba(255,165,0,0.2)',
                    tension: 0.3
                }]
            },
            options: {
                responsive: true
            }
        });

        // Frequência Chart
        new Chart(document.getElementById('frequenciaChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar'],
                datasets: [{
                    label: 'Treinos',
                    data: [60, 45, 80],
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0,123,255,0.2)',
                    tension: 0.3
                }]
            },
            options: {
                responsive: true
            }
        });

        // Bioimpedância Radar Chart
        new Chart(document.getElementById('bioChart'), {
            type: 'radar',
            data: {
                labels: ['Massa Muscular', 'Gordura Visceral', 'Taxa Metabólica', 'Água Corporal (%)', 'Gordura Corporal'],
                datasets: [{
                        label: '1ª Medida',
                        data: [60, 50, 70, 65, 55],
                        backgroundColor: 'rgba(255,165,0,0.2)',
                        borderColor: 'orange',
                    },
                    {
                        label: '2ª Medida',
                        data: [75, 40, 80, 70, 45],
                        backgroundColor: 'rgba(0,123,255,0.2)',
                        borderColor: '#007bff',
                    }
                ]
            },
            options: {
                responsive: true
            }
        });
    </script>

    <?php include '../../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
</body>

</html>