<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <title>TAURUS</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
  <?php include 'templates/header.php'; ?>

  <main id="mainIndex">
    <!-- Seção de Apresentação -->
    <section class="hero-text d-flex flex-column justify-content-end align-items-center text-center">
      <div>
        <div class="bg-white text-dark px-3 py-1 shadow mb-2 d-inline-block">
          <span class="fw-bold fs-5">PRONTO(A) PARA COMEÇAR?</span>
        </div>
        <div class="bg-transform text-white px-2 py-2 shadow mb-1">
          <span class="fs-5">AGENDE SUA AULA E COMECE SUA TRANSFORMAÇÃO.</span>
        </div>
        <i class="bi-seta bi-chevron-double-down fs-2 bounce-arrow"></i>
      </div>
    </section>

    <!-- Seção de Serviços -->
    <section class="servicos py-5 mt-5 text-center">
      <div class="container">
        <h2 class="mb-5 fw-bold fs-3 text-dark">TUDO EM SÓ UM<br> LUGAR...</h2>
        <div class="row g-4">

          <!-- Academia -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow atividade-card rounded-1 border-1 border-secondary">
              <div class="card-body">
                <h5 class="card-title fw-bold bg-transform text-white py-1 mb-3 mt-2 rounded">Academia (Bem-Estar)</h5>
                <p class="fw-bold mb-2">Seu Treino Merece Objetivo</p>
                <p class="card-text text-secondary">Não perca mais tempo na academia sem um plano real.<br> Tenha acesso a um programa de treino pensado para o seu tipo de corpo, genética e rotina.</p>
              </div>
              <img src="imagens/img_academia1.png" alt="Academia" class="img-fluid mx-auto d-block mb-5 p-2" style="max-width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>

          <!-- Lutas -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow atividade-card rounded-1 border-1 border-secondary">
              <div class="card-body">
                <h5 class="card-title fw-bold bg-transform text-white py-1 mb-3 mt-2 rounded">Vários tipos de lutas</h5>
                <p class="fw-bold mb-2">Força, técnica e disciplina</p>
                <p class="card-text text-secondary">Domine cada golpe, melhore sua resistência e se sinta mais confiante. Nossos treinos de boxe online são a melhor forma de atingir seus objetivos, onde quer que você esteja.</p>
              </div>
              <img src="imagens/img_luta2.png" alt="Lutas" class="img-fluid mx-auto d-block mb-5 p-2" style="max-width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>

          <!-- Skate -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow atividade-card rounded-1 border-1 border-secondary">
              <div class="card-body">
                <h5 class="card-title fw-bold bg-transform text-white py-1 mb-3 mt-2 rounded">Skateboarding</h5>
                <p class="fw-bold mb-2">Menos tombos, mais progresso</p>
                <p class="card-text text-secondary">O segredo para dominar novas manobras é a técnica.<br> Receba um treino completo, pensado para te dar o controle total sobre o seu skate.</p>
              </div>
              <img src="imagens/img_skate3.png" alt="Skate" class="img-fluid mx-auto d-block mb-5 p-2" style="max-width: 100%; height: auto; object-fit: cover;">
            </div>
          </div>

          <!-- Muito mais -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow atividade-card bg-dark text-white rounded-1">
              <div class="card-body">
                <h5 class="card-title fw-bold bg-transform text-white py-1 mb-3 mt-2 rounded">Muito mais...</h5>
                <p class="fw-bold mb-2">UM SÓ LUGAR, TODOS OS SEUS OBJETIVOS.</p>
                <p class="card-text">De musculação a boxe, de skate a yoga, a sua jornada de transformação começa aqui. Oferecemos um método completo que se adapta a você, não importa o seu esporte, com treinos personalizados para potencializar seus resultados. Nós cuidamos da estratégia para você se focar no que mais importa: treinar com propósito. E muito mais...</p>
                <a href="#" class="btn btn-outline-light rounded-0 mt-0">QUERO CONHECER. . .</a>
              </div> 
            </div>
          </div>

        </div>
        <p class="pt-5 mt-2 fs-6 text-dark fw-semibold">Sua jornada no esporte, em um só lugar. Tenha o seu plano de treino ideal, não importa qual seja a sua modalidade.</p>
      </div>
    </section>

  </main>

  <?php include 'templates/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/navbar-scroll.js"></script>
</body>
</html>
