<!-- CSS personalizado (coloque no <head> ou em seu arquivo CSS) -->
<style>
  .offcanvas .nav-link {
    transition: background-color 0.2s ease, color 0.2s ease;
    border-radius: 6px;
    color: #212529; /* cor escura padrão */
  }

  .offcanvas .nav-link:hover {
    background-color: #f1f1f1;
    color: #000 !important;
  }

  .offcanvas input[type="text"] {
    font-size: 14px;
  }

  .offcanvas input[type="text"]:hover {
  border-color: #f89616ab;     /* borda mais visível */
}
</style>

<!-- Offcanvas lateral -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
  <div class="offcanvas-header flex-column align-items-start">
    <!-- Logo e título -->
    <div class="d-flex align-items-center mb-3">
      <img src="../imagens/logo.png" alt="Logo" style="height: 30px;">
      <span class="fs-4 fw-bold ms-2">TAU<span class="text-warning">RUS</span></span>
    </div>

    <!-- Barra de pesquisa -->
    <form class="w-100 mb-2">
      <input type="text" class="form-control form-control-sm" placeholder="Pesquisar..." aria-label="Pesquisar">
    </form>

    <!-- Botão de fechar -->
    <button type="button" class="btn-close text-reset position-absolute top-0 end-0 m-3" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
  </div>

  <div class="offcanvas-body px-3">
    <ul class="nav flex-column mt-2">
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link link-dark" href="home_professor.php">
          <i class="bi bi-house-door me-2"></i> Home
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link link-dark" href="chat.php">
          <i class="bi bi-chat-dots me-2"></i> Chat
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link link-dark" href="adicionar_aluno.php">
          <i class="bi bi-person-plus me-2"></i> Adicionar Aluno
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link link-dark" href="criar_plano.php">
          <i class="bi bi-file-earmark-plus me-2"></i> Criar Plano
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link link-dark" href="editar_planos.php">
          <i class="bi bi-pencil-square me-2"></i> Editar Planos
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link link-dark" href="gerenciar_planos.php">
          <i class="bi bi-journal-text me-2"></i> Gerenciar Planos
        </a>
      </li>
      <li class="nav-item mb-3" style="font-size: 18px;">
        <a class="nav-link link-dark" href="progresso_alunos.php">
          <i class="bi bi-bar-chart-line me-2"></i> Progresso Alunos
        </a>
      </li>
    </ul>
  </div>
</div>
