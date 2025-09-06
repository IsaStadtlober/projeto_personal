<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <title>Cadastro Aluno</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/cadastro.css">
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
                <h5 class="fw-bold mb-1">Plano de Treino Personalizados:</h5>
                <p class="mb-0">Encontre exercicios com videos e guias para cada exercicio.</p>
              </div>
            </div>

            <div class="d-flex align-items-start mb-3">
              <i class="bi bi-chat-dots fs-3 text-dark me-3"></i>
              <div>
                <h5 class="fw-bold mb-1">Comunicação Direta:</h5>
                <p class="mb-0">Converse com seu personal, receba feedbacks e ajuste seus plano.</p>
              </div>
            </div>

            <div class="d-flex align-items-start mb-3">
              <i class="bi bi-graph-up fs-3 text-dark me-3"></i>
              <div>
                <h5 class="fw-bold mb-1">Monitore seu Progresso:</h5>
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

      <!-- Cards de Cadastro -->
      <div class="col-lg-6 col-12 mt-4 px-3 px-lg-0">
        <!-- Card 1: Informações Básicas -->
        <div id="cadastroCard1" class="card shadow w-100">
          <div class="card-body p-4">
            <h2 class="card-title text-center fw-bold">Criar Conta</h2>
            <p class="text-center">Preencha os campos para prosseguir com seu cadastro</p>
            <form id="formCadastro1" action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nome" class="form-label fw-bold">Peso</label>
                <input type="text" class="form-control" id="peso" name="peso" placeholder="Ex: 70kg" required>
              </div>
              <div class="mb-3">
                <label for="altura" class="form-label fw-bold">Altura</label>
                <input type="text" class="form-control" id="altura" name="altura" placeholder="Ex: 1,75m" required>
              </div>
              <div class="mb-3">
                <label for="exercicio" class="form-label fw-bold">Você pratica exercicios?</label>
                <select class="form-select">
                    <option>Sim, Pratico profissionalmente</option>
                    <option>Sim, Pratico com frequência</option>
                    <option>Sim, Pratico esporadicamente</option>
                    <option>Não Pratico</option>
                    <option>Não, Sou sedentário</option>
              </select>
              <div class="mb-3">
              <label class="form-label fw-bold">QUAIS DIAS NA SEMANA VOCÊ TEM DISPONIBILIDADE?</label>
              <div class="d-flex flex-wrap days-selector">
                <div class="d-flex flex-wrap">
                    <button type="button" class="btn btn-light btn-secondary rounded-circle border border-dark me-2 mb-2 fw-bold">S</button>
                    <button type="button" class="btn btn-light btn-secondary rounded-circle border border-dark me-2 mb-2 fw-bold">T</button>
                    <button type="button" class="btn btn-light btn-secondary rounded-circle border border-dark me-2 mb-2 fw-bold">Q</button>
                    <button type="button" class="btn btn-light btn-secondary rounded-circle border border-dark me-2 mb-2 fw-bold">Q</button>
                    <button type="button" class="btn btn-light btn-secondary rounded-circle border border-dark me-2 mb-2 fw-bold">S</button>
                    <button type="button" class="btn btn-light btn-secondary rounded-circle border border-dark me-2 mb-2 fw-bold">S</button>
                    <button type="button" class="btn btn-light btn-secondary rounded-circle border border-dark mb-2 fw-bold">D</button>
                </div>
             </div>

            </div>
              <div class="d-grid">
                <button type="button" class="btn btn-secondary" id="btnAvancar1">Concluir</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include 'templates/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/navbar-scroll.js"></script>
  <script src="js/cadastro.js"></script>
</body>

</html>