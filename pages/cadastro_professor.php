<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
  <title>Cadastro Professor</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include '../templates/header.php'; ?>

  <main class="container flex-grow-1">
    <div class="row gx-4 gy-5">
      <!-- Coluna esquerda -->
      <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center coluna-esquerda mb-4 mb-lg-0">
        <div class="conteudo-esquerda">
          <div class="d-flex align-items-center mb-4 gap-2 ps-0">
            <img src="../imagens/logo1.png" alt="Logo Xportes" style="height: 38px;" class="logo-xportes">
            <p class="mb-0 fs-2 fw-bold">X<span class="header_cor">portes</span></p>
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

      <!-- Cards de Cadastro -->
      <div class="col-lg-6 col-12 mt-4 px-3 px-lg-0">
        <!-- Card 1: Informações Básicas -->
        <div id="cadastroCard1" class="card shadow w-100">
          <div class="card-body p-4">
            <h2 class="card-title text-center fw-bold">Criar Conta</h2>
            <p class="text-center">Preencha os campos para criar sua conta</p>
            <form id="formCadastro1" action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
              </div>
              <div class="mb-3">
                <label for="dataNascimento" class="form-label fw-bold">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
              </div>
              <div class="mb-3">
                <label for="cpf" class="form-label fw-bold">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
              </div>
              <div class="mb-3">
                <label for="emailCadastro" class="form-label fw-bold">E-mail</label>
                <input type="email" class="form-control" id="emailCadastro" name="emailCadastro" placeholder="nome@exemplo.com" required>
              </div>
              <div class="mb-3">
                <label for="telefone" class="form-label fw-bold">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(xx) xxxxxxx-xxxx" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-bold">Foto de Perfil</label>
                <div class="custom-file-upload">
                  <input type="file" class="custom-file-input" id="foto_perfil" name="foto_perfil" accept="image/*" required>
                  <label for="foto_perfil" class="btn btn-outline-dark d-flex align-items-center gap-2 p-2">
                    <i class="bi bi-image"></i> Escolher Arquivo
                  </label>
                  <span id="file-name" class="small text-muted mt-2 d-block">Nenhum arquivo selecionado</span>
                </div>
              </div>
              <div class="d-flex justify-content-between gap-3">
                <button type="reset" class="btn btn-outline-danger w-50">Limpar Tudo</button>
                <button type="button" class="btn btn-secondary w-50" id="btnAvancar1">Avançar</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Card 2: Informações Adicionais -->
        <div id="cadastroCard2" class="card shadow w-100 d-none">
          <div class="card-body p-4">
            <div class="position-absolute top-0 start-0 m-3">
              <button type="button" class="btn btn-link text-dark p-0" id="btnVoltar1">
                <i class="bi bi-arrow-left fs-3"></i>
              </button>
            </div>
            <h2 class="card-title text-center fw-bold">Informações Adicionais</h2>
            <p class="text-center">Preencha os campos abaixo</p>
            <form id="formCadastro2" action="" method="post">
              <div class="mb-3">
                <label for="credencial" class="form-label fw-bold">Credencial Profissional</label>
                <input type="text" class="form-control" id="credencial" name="credencial" placeholder="Ex: CREF 000000-G/SP" required>
              </div>
              <div class="mb-3">
                <label for="comprovacao" class="form-label fw-bold">Comprovação</label>
                <input type="file" class="form-control" id="comprovacao" name="comprovacao" accept="image/*,application/pdf" required>
              </div>
              <div class="mb-3">
                <label for="modalidades" class="form-label fw-bold">Modalidades</label>
                <input type="text" class="form-control" id="modalidades" name="modalidades" placeholder="Ex: Musculação, Treinamento Funcional, HIIT, Yoga, Pilates" required>
              </div>
              <div class="mb-3">
                <label for="nivelExperiencia" class="form-label fw-bold">Nível de Experiência</label>
                <input type="text" name="experiencia" id="experiencia" class="form-control" placeholder="Escreva seu nível de habilidade nas modalidades descritas" required>
              </div>
              <div class="mb-3">
                <label for="focoCliente" class="form-label fw-bold">Foco de cliente</label>
                <input type="text" name="foco" id="foco" class="form-control" placeholder="Ex: Iniciante, Idosos, Atletas, Reabilitação, Emagrecimento" required>
              </div>
              <div class="mb-4">
                <label class="form-label">Dias de Disponibilidade</label>
                <div class="d-flex flex-wrap gap-3 days-selector">
                  <input type="checkbox" class="btn-check" name="disponibilidade[]" id="domingo" value="domingo" autocomplete="off">
                  <label class="btn btn-outline-dark" for="domingo">S</label>

                  <input type="checkbox" class="btn-check" name="disponibilidade[]" id="segunda" value="segunda" autocomplete="off">
                  <label class="btn btn-outline-dark" for="segunda">T</label>

                  <input type="checkbox" class="btn-check" name="disponibilidade[]" id="terca" value="terca" autocomplete="off">
                  <label class="btn btn-outline-dark" for="terca">Q</label>

                  <input type="checkbox" class="btn-check" name="disponibilidade[]" id="quarta" value="quarta" autocomplete="off">
                  <label class="btn btn-outline-dark" for="quarta">Q</label>

                  <input type="checkbox" class="btn-check" name="disponibilidade[]" id="quinta" value="quinta" autocomplete="off">
                  <label class="btn btn-outline-dark" for="quinta">S</label>

                  <input type="checkbox" class="btn-check" name="disponibilidade[]" id="sexta" value="sexta" autocomplete="off">
                  <label class="btn btn-outline-dark" for="sexta">S</label>

                  <input type="checkbox" class="btn-check" name="disponibilidade[]" id="sabado" value="sabado" autocomplete="off">
                  <label class="btn btn-outline-dark" for="sabado">D</label>
                </div>
              </div>
              <div class="d-flex justify-content-between gap-3">
                <button type="reset" class="btn btn-outline-danger w-50">Limpar Tudo</button>
                <button type="button" class="btn btn-secondary w-50" id="btnAvancar2">Avançar</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Card 3: Senha -->
        <div id="cadastroCard3" class="card shadow w-100 d-none">
          <div class="card-body p-4 mb-5 pb-1">
            <div class="position-absolute top-0 start-0 m-3">
              <button type="button" class="btn btn-link text-dark p-0" id="btnVoltar2">
                <i class="bi bi-arrow-left fs-3"></i>
              </button>
            </div>
            <h2 class="card-title text-center fw-bold">Definir Senha</h2>
            <p class="text-center">Escolha uma senha para sua conta</p>
            <form id="formCadastro3" action="" method="post">
              <div class="mb-3">
                <label for="senha" class="form-label fw-bold">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a sua senha de acesso" required>
              </div>
              <div class="mb-3">
                <label for="confirmarSenha" class="form-label fw-bold">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" placeholder="Confirme sua senha" required>
              </div>
              <div class="d-flex justify-content-between gap-3">
                <button type="reset" class="btn btn-outline-danger w-50">Limpar</button>
                <button type="submit" class="btn btn-secondary w-50">Finalizar Cadastro</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include '../templates/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/navbar-scroll.js"></script>
  <script src="../js/cadastro_prof.js"></script>
</body>
</html>