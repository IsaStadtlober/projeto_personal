<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taurus - Cadastro</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    /* Navbar */
    .navbar {
      border-bottom: 1px solid #ddd;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 24px;
    }
    .navbar-brand span {
      color: orange;
    }
    /* Painel esquerdo */
    .left-panel {
      padding: 40px;
    }
    .left-panel .logo {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .left-panel .logo span {
      color: orange;
    }
    .left-panel ul li {
      margin-bottom: 15px;
    }
    /* Formulário */
    .form-container {
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
    }
    .form-container h5 {
      text-align: center;
      letter-spacing: 3px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-container p {
      text-align: center;
      margin-bottom: 30px;
      font-size: 14px;
      color: #555;
    }
    .form-label {
      font-weight: bold;
      font-size: 14px;
    }
    .btn-custom {
      background-color: #444;
      color: #fff;
      width: 100%;
      font-weight: bold;
      letter-spacing: 2px;
    }
    /* Rodapé */
    footer {
      text-align: center;
      margin-top: 40px;
      font-size: 13px;
      color: #555;
    }
    footer .logo {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
    }
    footer .logo span {
      color: orange;
    }

  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <?php include 'templates/header.php'; ?>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white px-4">
    <div class="container-fluid justify-content-between">
      <a class="navbar-brand mx-auto" href="#">
        TAU<span>RUS</span>
      </a>
      <div>
        <a href="#" class="text-dark text-decoration-none me-2">Entrar</a>
        <i class="bi bi-person"></i>
      </div>
    </div>
  </nav>

  <div class="container-fluid mt-4">
    <div class="row justify-content-center">
      <!-- Lado esquerdo -->
      <div class="col-md-5 left-panel">
        <div class="logo">TAU<span>RUS</span></div>
        <ul>
          <li><strong>Planos de Treino Personalizados:</strong><br>
            Desenvolva exercícios com vídeos e guias para cada exercício.
          </li>
          <li><strong>Comunicação Direta:</strong><br>
            Converse com seus alunos, receba feedbacks e ajuste seus planos quando precisar.
          </li>
          <li><strong>Monitore seu Progresso:</strong><br>
            Acompanhe seus resultados com dados e gráficos para ver sua evolução.
          </li>
          <li><strong>Conteúdos Exclusivos:</strong><br>
            Acesse materiais de apoio, dicas de nutrição e guias de referência.
          </li>
        </ul>
      </div>

      <!-- Lado direito (formulário) -->
      <div class="col-md-5 d-flex align-items-center justify-content-center">
        <div class="form-container w-100">
          <h5>CADASTRO</h5>
          <p>Preencha os campos para prosseguir com seu cadastro</p>

          <form>
            <div class="mb-3">
              <label class="form-label">NOME</label>
              <input type="text" class="form-control" placeholder="Nome completo com sobrenome">
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

      <!-- Card de Cadastro 1 -->
      <div class="col-lg-6 col-12 mt-4 px-3 px-lg-0">
        <div id="cadastroCard1" class="card shadow w-100">
          <div class="card-body p-4">
            <h2 class="card-title text-center fw-bold">Criar Conta</h2>
            <p class="text-center">Preencha os campos para criar sua conta</p>
            <form id="formCadastro1" action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required>
              </div>
              <div class="mb-3">
                <label for="dataNascimento" class="form-label fw-bold">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
              </div>
              <div class="mb-3">
                <label for="cpf" class="form-label fw-bold">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Máximo 11 dígitos" required>
              </div>
              <div class="mb-3">
                <label for="emailCadastro" class="form-label fw-bold">E-mail</label>
                <input type="email" class="form-control" id="emailCadastro" name="emailCadastro" placeholder="seuemail@exemplo.com" required>
              </div>
              <div class="mb-3">
                <label for="telefone" class="form-label fw-bold">Telefone para contato com cliente</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
              </div>
              <div class="mb-3">
                <label for="instagram" class="form-label fw-bold">Instagram Profissional</label>
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Ex: @PersonalTrainner" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-bold">Foto de Perfil</label>
                <div class="custom-file-upload">
                  <input type="file" class="custom-file-input" id="foto_perfil" name="foto_perfil" accept="image/*" required>
                  <label for="foto_perfil" class="btn btn-outline-dark d-flex align-items-center gap-2">
                    <i class="bi bi-image"></i> Escolher Arquivo
                  </label>
                  <span id="file-name" class="text-muted mt-2 d-block">Nenhum arquivo selecionado</span>
                </div>
              </div>
              <div class="d-grid">
                <button type="button" class="btn btn-secondary" id="btnAvancar1">Avançar</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Card de Cadastro 2 -->
        <div id="cadastroCard2" class="card shadow w-100 d-none">
          <div class="card-body p-4">
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
              <h2 class="card-title text-right fw-bold">Especializações</h2><br>
              <div class="mb-3">
                <label for="modalidades" class="form-label fw-bold">Modalidades</label>
                <input type="text" class="form-control" id="modalidades" name="modalidades" placeholder="Ex: Musculação, Treinamento Funcional, HIIT, Yoga, Pilates" required>
              </div>
              <div class="mb-3">
                <label for="nivelExperiencia" class="form-label fw-bold">Nível de Experiência</label>
                <input type="text" class="form-control" id="nivelExperiencia" name="nivelExperiencia" placeholder="Escreva seu nível de experiência nas modalidades descritas" required>
              </div>
              <div class="mb-3">
                <label for="focoCliente" class="form-label fw-bold">Foco de Cliente</label>
                <input type="text" class="form-control" id="focoCliente" name="focoCliente" placeholder="Ex: Iniciantes, Idosos, Atletas, Reabilitação, Emagrecimento" required>
              </div>
              <div class="mb-3">
                <label class="form-label">QUAIS DIAS NA SEMANA VOCÊ TEM DISPONIBILIDADE?</label>
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
              <div class="d-grid">
                <button type="button" class="btn btn-secondary" id="btnAvancar2">Avançar</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Card de Cadastro 3 -->
        <div id="cadastroCard3" class="card shadow w-100 d-none">
          <div class="card-body p-4">
            <h2 class="card-title text-center fw-bold">Definir Senha</h2>
            <p class="text-center">Escolha uma senha para sua conta</p>
            <form id="formCadastro3" action="" method="post">
              <div class="mb-3">
                <label for="senha" class="form-label fw-bold">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
              </div>
              <div class="mb-3">
                <label for="confirmarSenha" class="form-label fw-bold">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" placeholder="Confirme sua senha" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-secondary">Finalizar Cadastro</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <p>Copyright © 2024 Taurus Company. Todos os direitos reservados.</p>
    <div class="logo">TAU<span>RUS</span></div>
  </footer>

  <!-- Bootstrap JS + Ícones -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>