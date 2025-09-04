<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
    <title>TAURUS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'templates/header.php'; ?>

    <main class="container flex-grow-1">
        <div class="row gx-4 gy-5">
            <!-- Coluna esquerda -->
            <div class="col-md-6 mt-4 mb-4 mb-md-0">
                <div class="d-flex align-items-center mb-4">
                <img src="imagens/logo.png" alt="Logo TAURUS" style="height: 50px;" class="me-1">
                <p class="mb-0 fs-2 fw-bold">
                    TAU<span class="header_cor">RUS</span>
                </p>
                </div>



                <div class="mb-4 ms-3">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-person-video3 fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Plano de Treino Personalizado</h5>
                            <p class="mb-0">Encontre sua rotina com vídeos e guias para cada exercício.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-chat-dots fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Comunicação Direta</h5>
                            <p class="mb-0">Converse com seu personal, receba feedbacks e ajuste seu plano quando precisar.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-graph-up fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Monitorar seus Progressos</h5>
                            <p class="mb-0">Acompanhe sua evolução com dados e gráficos para ver seus resultados.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <i class="bi bi-book fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Conteúdos Exclusivos</h5>
                            <p class="mb-0">Acesse materiais de apoio, dicas de nutrição e guias de técnica.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Painel de Login -->
            <div class="col-md-6 mt-1 d-flex justify-content-center px-3 px-md-0">
                <div id="loginPanel"  class="w-100" style="max-width: 500px;">

                    <!-- Card de Login -->
                    <div id="loginCard" class="card shadow w-100">
                        <div class="card-body p-4">
                            <h2 class="card-title text-center fw-bold">Entrar no Espaço do Professor</h2>
                            <p class="text-center">Preencha os campos para prosseguir com seu login</p>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label fw-bold">Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha" required>
                                </div>
                                <div class="d-flex justify-content-between mb-3 align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span>Não tem conta?</span>
                                        <a href="#" class="ms-1">Crie uma!</a>
                                    </div>
                                    <a href="#" id="esqueciSenhaLink">Esqueci a senha</a>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-secondary">Avançar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Card de Recuperação de Senha -->
                    <div id="modalEsqueciSenha" class="card shadow w-100 d-none mt-5" style="top: 0; left: 0; z-index: 10;">
                        <div class="card-body">
                            <h2 class="card-title text-center">Esqueci minha senha</h2>
                            <p class="text-center"> Siga os passos para recuperar sua conta</p>
                            <form id="formRecuperacao">
                                <div class="mb-3">
                                    <label for="emailRecuperacao" class="form-label fw-bold ">E-mail</label>
                                    <p class="text-right">Informe seu e-mail para receber um link de recuperação da sua senha.</p>
                                    <input type="email" class="form-control" id="emailRecuperacao" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-secondary">Enviar</button>
                                </div>
                            </form>
                            <div id="mensagemSucesso" class="alert alert-success mt-3 d-none" role="alert">
                                Instruções enviadas para o seu e-mail!
                            </div>
                            <div class="text-center mt-3">
                                <a href="#" id="voltarLogin">Voltar para o login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    
    <?php include 'templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/navbar-scroll.js"></script>
    <script src="js/login.js"></script>
</body>
</html>