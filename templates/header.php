<nav id="mainNavbar" class="navbar bg-white fixed-top py-2 shadow visible-navbar">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <!-- Coluna esquerda: botão de voltar (exibe apenas fora da index.php) -->
    <div style="width: 100px;" class="text-start">
      <?php
      $currentPage = basename($_SERVER['PHP_SELF']);
      $pagesComSeta = ['cadastro_aluno.php', 'cadastro_professor.php', 'login_aluno.php', 'login_professor.php'];
      $pagesSemHamburguer = ['index.php', 'cadastro_aluno.php', 'cadastro_professor.php', 'login_aluno.php', 'login_professor.php'];
      $pagesAluno = ['perfil_aluno.php', 'meu_progresso.php', 'home_aluno.php', 'treinos.php'];
      $pagesProfessor = ['add_aluno.php', 'home_professor.php', 'criar_plano.php','editar_planos.php', 'gerenciar_planos.php', 'progresso_aluno.php'];

      if (in_array($currentPage, $pagesComSeta)) {
        // Exibe botão de voltar
        echo '<a href="../index.php" class="btn btn-link text-dark d-flex align-items-center gap-1">
                  <i class="bi bi-arrow-left fs-4"></i>
                </a>';
      } elseif (!in_array($currentPage, $pagesSemHamburguer)) {
        // Exibe botão de hamburguer
        echo '<button class="border-0 bg-transparent p-0 mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
                <i class="bi bi-list fs-3 text-dark"></i>
              </button>
              ';
      }
      ?>
    </div>

    <!-- Coluna central: imagem + nome -->
    <div class="d-flex align-items-center mx-auto">
      <img src="/projeto_personal/imagens/logo1.png" alt="Logo" style="height: 40px;">
      <a href="../../index.php" class="mb-0 fs-1 text-dark fw-bold text-decoration-none ms-2">
        <span class="header_cor">X</span>portes
      </a>
    </div>

    <!-- Coluna direita: botão com dropdown sem seta -->
    <div style="width: 100px;" class="text-end">
      <?php
      $currentPage = basename($_SERVER['PHP_SELF']);
      $pagesComLogin = ['index.php', 'cadastro_aluno.php', 'cadastro_professor.php', 'login_aluno.php', 'login_professor.php'];
      ?>

      <?php if (in_array($currentPage, $pagesComLogin)): ?>
        <!-- Botão padrão "Entrar" -->
        <div class="dropdown">
          <a class="nav-link text-dark d-flex align-items-center entrar-hover ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fs-5">Entrar</span>
            <i class="bi bi-person-fill ms-1 fs-5 icon-hover"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li><a class="dropdown-item" href="/projeto_personal/pages/login_aluno.php">ENTRAR COMO ALUNO</a></li>
            <li><a class="dropdown-item" href="/projeto_personal/pages/login_professor.php">ENTRAR COMO PROFESSOR</a></li>
          </ul>
        </div>
      <?php endif; ?>
      <?php if (in_array($currentPage, $pagesProfessor)): ?>
        <!-- Botão "Prof. Carlos" com opções -->
        <div class="dropdown">
          <a class="nav-link text-dark d-flex align-items-center ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fs-5 fw-semibold">Prof. Carlos</span>
            <i class="bi bi-person-circle ms-2 fs-5"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="/projeto_personal/index.php">Sair</a></li>
          </ul>
        </div>
      <?php endif; ?>
      <?php if (in_array($currentPage, $pagesAluno)): ?>
      <!--Botão "Aluno Diogo" com opções-->
      <div class="dropdown">
          <a class="nav-link text-dark d-flex align-items-center ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fs-5 fw-semibold">Aluno Diogo</span>
            <i class="bi bi-person-circle ms-2 fs-5"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li><a class="dropdown-item" href="perfil_aluno.php">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="/projeto_personal/index.php">Sair</a></li>
          </ul>
        </div>
      <?php endif; ?>
    </div>
</nav>