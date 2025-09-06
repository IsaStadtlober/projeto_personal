<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <title>Login ALuno</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include 'templates/header.php'; ?>

  <main class="container flex-grow-1">
    <div class="row gx-4 gy-5">
      <!-- Coluna esquerda -->
      <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center coluna-esquerda mb-4 mb-lg-0">
        <div class="conteudo-esquerda">
          <div class="d-flex align-items-center mb-4 gap-2 ps-0">
            <img src="imagens/logo.png" alt="Logo TAURUS" style="height: 50px;" class="logo-taurus">
            <p class="mb-0 fs-2 fw-bold">TAU<span class="header_cor">RUS</span></p>
          </div>

          <div class="mb-5">
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
                <p class="mb-0">Converse com seu personal, receba feedbacks e ajuste seu plano.</p>
              </div>
            </div>

            <div class="d-flex align-items-start mb-3">
              <i class="bi bi-graph-up fs-3 text-dark me-3"></i>
              <div>
                <h5 class="fw-bold mb-1">Monitorar seus Progressos</h5>
                <p class="mb-0">Acompanhe sua evolução com os gráficos para ver seus resultados.</p>
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
      </div>

      <!-- Painel de Login -->
      <div class="col-lg-6 col-12 mt-4 px-3 px-lg-0">
        <div id="loginPanel" class="w-100 mx-auto px-4">
          <!-- Card de Login -->
          <div id="loginCard" class="card shadow w-100">
            <div class="card-body p-4">
              <h2 class="card-title text-center fw-bold">Entrar no Espaço do Aluno</h2>
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
                    <a href="cadastro_aluno.php" class="ms-1">Crie uma!</a>
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
            <div class="d-flex justify-content-center mt-lg-5">
                <div id="modalEsqueciSenha" class="card shadow w-100 px-4 d-none">
                    <div class="card-body p-4">
                    <h2 class="card-title text-center fw-bold">Recuperar Senha</h2>
                    <p class="text-center">Informe seu e-mail para receber o link de recuperação</p>
                    <form id="formRecuperacao">
                        <div class="mb-3">
                        <label for="emailRecuperacao" class="form-label fw-bold">E-mail</label>
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