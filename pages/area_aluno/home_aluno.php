<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagens/logo1.png" type="image/x-icon">
    <title>Home Aluno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/css_aluno/home_aluno.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../../templates/sidebar_aluno.php';
    ?>

    <main style="margin-top: 100px;">
        <div class="container py-4">
            <div class="row g-4">

                <!-- Treino do Dia -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="../../imagens/card_treinodia.png" alt="" style="width: 60px;">
                            <img src="../../imagens/card_treinodia.png" alt="" style="width: 60px;">
                            <img src="../../imagens/card_treinodia.png" alt="" style="width: 60px;">
                            <h5 class="card-title mt-2">Seu Treino do Dia</h5>
                            <button class="btn btn-success mt-2">Iniciar Treino</button>
                        </div>
                    </div>
                </div>

                <!-- Motivacional -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="fs-5">"O corpo alcança o que a mente acredita, então não desista, o suor de
                                    hoje é o resultado de amanhã."
                                    <br>
                                    <br>
                                    <br>
                                    - Isabelle Stadtlober

                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- Notificações -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light fw-bold">Notificações</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✅ Você já está há 5 dias seguidos ativo, continue assim!</li>
                            <li class="list-group-item">📅 Seu plano expira em 12 dias</li>
                        </ul>
                    </div>
                </div>

                <!-- Progresso da Semana -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light fw-bold">Progresso da Semana</div>
                        <div class="card-body d-flex justify-content-between text-center">
                            <div class="dia">
                                <div>S</div>
                                <div class="bolinha laranja"><i class="bi bi-check-lg"></i></div>
                            </div>
                            <div class="dia">
                                <div>T</div>
                                <div class="bolinha laranja"><i class="bi bi-check-lg"></i></div>
                            </div>
                            <div class="dia">
                                <div>Q</div>
                                <div class="bolinha laranja"><i class="bi bi-check-lg"></i></div>
                            </div>
                            <div class="dia">
                                <div>Q</div>
                                <div class="bolinha laranja"><i class="bi bi-check-lg"></i></div>
                            </div>
                            <div class="dia">
                                <div>S</div>
                                <div class="bolinha cinza"></div>
                            </div>
                            <div class="dia">
                                <div>S</div>
                                <div class="bolinha cinza"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Próximos Treinos -->
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light fw-bold">Próximos Treinos</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <strong>Treino A - Superiores</strong><br>
                                    <small>1 hora</small>
                                </div>
                                <button class="btn btn-outline-danger btn-sm">Cancelar</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Treino B - Pernas</strong><br>
                                    <small>45 minutos</small>
                                </div>
                                <button class="btn btn-outline-danger btn-sm">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include '../../templates/footer.php'; ?>
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.1/dist/dotlottie-wc.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
</body>

</html>