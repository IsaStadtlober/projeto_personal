<nav id="mainNavbar" class="navbar bg-white fixed-top py-2 shadow visible-navbar">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <!-- Coluna esquerda: botão de voltar (exibe apenas fora da index.php) -->
    <div style="width: 100px;" class="text-start">
      <?php if (basename($_SERVER['PHP_SELF']) !== 'index.php'): ?>
        <a href="index.php" class="btn btn-link text-dark d-flex align-items-center gap-1">
          <i class="bi bi-arrow-left fs-4"></i>
        </a>
      <?php endif; ?>
    </div>


    <!-- Coluna central: imagem + nome -->
    <div class="d-flex align-items-center mx-auto">
      <img src="imagens/logo.png" alt="Logo" style="height: 40px;">
      <a href="index.php" class="mb-0 fs-1 text-dark fw-bold text-decoration-none ms-2">
        TAU<span class="header_cor">RUS</span>
      </a>
    </div>

    <!-- Coluna direita: botão com dropdown sem seta -->
    <div style="width: 100px;" class="text-end">
      <div class="dropdown">
        <a class="nav-link text-dark d-flex align-items-center entrar-hover ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="fs-5">Entrar</span>
          <i class="bi bi-person-fill ms-1 fs-5 icon-hover"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
          <li><a class="dropdown-item" href="login_aluno.php">ENTRAR COMO ALUNO</a></li>
          <li><a class="dropdown-item" href="login_professor.php">ENTRAR COMO PROFESSOR</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>


