<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <title>Taurus - Cadastro</title>
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
<body>
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
            <div class="mb-3">
              <label class="form-label">DATA DE NASCIMENTO</label>
              <input type="date" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">CPF</label>
              <input type="text" class="form-control" placeholder="Máximo 11 dígitos">
            </div>
            <div class="mb-3">
              <label class="form-label">E-MAIL</label>
              <input type="email" class="form-control" placeholder="E-mail para login e novidades">
            </div>
            <div class="mb-3">
              <label class="form-label">TELEFONE</label>
              <div class="input-group">
                <span class="input-group-text">+55</span>
                <input type="text" class="form-control" placeholder="Máximo 9 dígitos">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">ENDEREÇO</label>
              <input type="text" class="form-control" placeholder="Endereço completo">
            </div>
            <button type="submit" class="btn btn-custom mt-3">AVANÇAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include 'templates/footer.php'; ?>
  <!-- Bootstrap JS + Ícones -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>