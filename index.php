<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <title>XPORTES</title>
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
                <h5 class="card-title fw-bold bg-transform text-white py-1 mb-4 mt-2 rounded">Muito mais...</h5>
                <p class="fw-bold mb-3">UM SÓ LUGAR, TODOS OS SEUS OBJETIVOS.</p>
                <p class="card-text">De musculação a boxe, de skate a yoga, a sua jornada de transformação começa aqui. Oferecemos um método completo que se adapta a você, não importa o seu esporte, com treinos personalizados para potencializar seus resultados. Nós cuidamos da estratégia para você se focar no que mais importa: treinar com propósito. E muito mais...</p>
              </div> 
            </div>
          </div>

        </div>
        <p class="pt-5 mt-3 mb-4 fs-6 text-dark fw-semibold">Sua jornada no esporte, em um só lugar. Tenha o seu plano de treino ideal, não importa qual seja a sua modalidade.</p>
      </div>
    </section>

    <!-- Seção de Descrição -->
    <section class="container-fluid p-0 m-0">
      <!-- Banner com imagem de fundo ocupando toda a largura -->
      <div class="position-relative w-100 mb-5">
        <img src="imagens/img_index3.png" alt="Banner" class="img-fluid w-100 shadow" style="min-height: 100px; max-height: 100px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center px-3 w-100">
          <h1 class="text-white fw-bold pt-2 fs-3">TODOS OS TREINOS, UM SÓ OBJETIVO:<br> O SEU.</h1>
        </div>
      </div>

      <!-- Conteúdo dividido em duas colunas -->
      <div class="container pb-5 mb-5">
        <div class="row gx-5 gy-5 pt-5 align-items-center justify-content-center">
          <!-- Coluna de texto -->
          <div class="col-lg-6 col-12 px-4  text-center text-lg-start d-flex flex-column align-items-center align-items-lg-start">
            <h2 class="fw-bold text-dark mb-3 text-uppercase fs-4">A revolução do treino online:<br>O personal trainer perfeito para você</h2>
            <p class="text-dark mb-4 small">
            Descubra uma nova era de bem-estar com o nosso site, a plataforma que conecta você aos melhores personal trainers online do país. Aqui, sua jornada de saúde e fitness é completamente personalizada.
            </p>

            <h5 class="fw-bold text-dark mb-3 fs-4 text-uppercase">A sua jornada, o seu esporte, o seu professor</h5>
            <p class="text-dark mb-4 small">
              Seja qual for o seu objetivo — perda de peso, ganho de massa muscular ou simplesmente começar a se exercitar — temos o profissional certo para te guiar. Nossa plataforma reúne uma vasta rede de personal trainers especializados em diversas modalidades.
            </p>

            <ul class="list-unstyled">
              <li class="mb-1 small"><i class="bi bi-check-circle-fill me-2 header_cor"></i><strong class="fs-6">Dança? </strong>Temos professores de zumba e ballet.</li>
              <li class="mb-1 small"><i class="bi bi-check-circle-fill me-2 header_cor"></i><strong class="fs-6">Lutas? </strong>Escolha entre instrutores de boxe e jiu-jitsu.</li>
              <li class="small"><i class="bi bi-check-circle-fill me-2 header_cor"></i><strong class="fs-6">Fitness? </strong>Descubra novos exercícios em yoga e pilates.</li>
            </ul>
          </div>

          <!-- Coluna da imagem -->
          <div class="col-lg-6 col-12 text-center mb-lg-0">
              <img src="imagens/img_index2.png" alt="Mulher treinando" style="box-shadow: 5px 4px 3px 1px #f89616;" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- Seção de Como Começar -->
    <section class="container-fluid p-0 m-0">
      <!-- Banner com imagem de fundo ocupando toda a largura -->
      <div class="position-relative w-100 mb-5">
        <img src="imagens/img_index3.png" alt="Banner" class="img-fluid w-100 shadow" style="min-height: 100px; max-height: 100px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center px-3 w-100">
          <h1 class="text-white fw-bold pt-2 fs-3">COMO COMEÇAR?</h1>
        </div>
      </div>

      <div class="container py-5">
        <div class="row justify-content-center text-center position-relative">
          <!-- Linha horizontal (conector) -->
          <div class="position-absolute top-50 start-0 w-100 d-none d-md-block" style="height: 2px; background-color: #f89616;"></div>

          <!-- Passo 1 -->
          <div class="col-12 col-md-3 mb-5 mb-md-0 position-relative">
            <div class="bg-white p-3 rounded shadow h-100 d-flex flex-column justify-content-between card-hover">
              <div class="mb-2">
                <i class="bi bi-person-plus-fill fs-1 text-warning"></i>
              </div>
              <h5 class="fw-bold">1. Crie sua conta</h5>
              <p class="small text-muted">Explore nossa lista de esportes e encontre o personal ideal para você, filtrando por modalidade, experiência ou avaliação.</p>
            </div>
          </div>

          <!-- Passo 2 -->
          <div class="col-12 col-md-3 mb-5 mb-md-0 position-relative">
            <div class="bg-white p-3 rounded shadow h-100 d-flex flex-column justify-content-between card-hover">
              <div class="mb-2">
                <i class="bi bi-search fs-1 text-warning"></i>
              </div>
              <h5 class="fw-bold">2. Encontre seu professor</h5>
              <p class="small text-muted">Explore a variedade de esportes e encontre o profissional ideal, usando filtros de modalidade, experiência e localização.</p>
            </div>
          </div>

          <!-- Passo 3 -->
          <div class="col-12 col-md-3 mb-5 mb-md-0 position-relative">
            <div class="bg-white p-3 rounded shadow h-100 d-flex flex-column justify-content-between card-hover">
              <div class="mb-2">
                <i class="bi bi-calendar-check fs-1 text-warning"></i>
              </div>
              <h5 class="fw-bold">3. Agende sua aula</h5>
              <p class="small text-muted">Marque suas aulas online ou presenciais diretamente pela plataforma, no horário que for mais conveniente para você.</p>
            </div>
          </div>

          <!-- Passo 4 -->
          <div class="col-12 col-md-3 position-relative">
            <div class="bg-white p-3 rounded shadow h-100 d-flex flex-column justify-content-between card-hover">
              <div class="mb-2">
                <i class="bi bi-trophy fs-1 text-warning"></i>
              </div>
              <h5 class="fw-bold">4. Alcance seus objetivos</h5>
              <p class="small text-muted">Comece a treinar com um especialista e evolua no esporte que você ama, no seu próprio ritmo.</p>
            </div>
          </div>
        </div>

        <!-- Texto final -->
        <div class="text-center mt-5 pt-5 mb-5">
          <p class="fw-semibold text-dark">Sua jornada no esporte, em um só lugar. Tenha o seu plano de treino ideal, não importa qual seja a sua modalidade.</p>
        </div>
      </div>
    </section>

  </main>

  <?php include 'templates/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/navbar-scroll.js"></script>
</body>
</html>
