<!-- Offcanvas lateral -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
  <div class="offcanvas-header flex-column align-items-start">
    <!-- Logo e título -->
    <div class="d-flex align-items-center mb-3">
      <img src="../imagens/logo1.png" alt="Logo" style="height: 27px;">
      <span class="fs-4 fw-bold ms-2"><span class="header_cor">X</span>portes</span>
    </div>

    <!-- Barra de pesquisa com ícone -->
    <form class="w-100 mb-2 position-relative">
      <input type="text" class="form-control form-control-sm ps-5" placeholder="Pesquisar..." aria-label="Pesquisar">
      <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3" style="color: gray;"></i>
    </form>

    <!-- Botão de fechar -->
    <button type="button" class="btn-close text-reset position-absolute top-0 end-0 m-3" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
  </div>

  <div class="offcanvas-body px-3">
    <ul class="nav flex-column mt-2">
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link <?= (strpos($currentPage, 'home_aluno.php') !== false) ? 'active' : '' ?>" href="home_aluno.php">
          <i class="bi bi-house-door me-2"></i> Home
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link <?= (strpos($currentPage, 'meu_progresso.php') !== false) ? 'active' : '' ?>" href="meu_progresso.php">
          <i class="bi bi-person-plus me-2"></i> Meu progresso
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link <?= (strpos($currentPage, 'treinos.php') !== false) ? 'active' : '' ?>" href="treinos.php">
          <i class="bi bi-file-earmark-plus me-2"></i> Treinos
        </a>
      </li>
    </ul>
  </div>
</div>