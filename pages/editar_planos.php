<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
  <title>Editar Planos</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/sidebar.css">
</head>

<body>
<?php include '../templates/sidebar.php'; ?>

<?php
session_start();
$_SESSION['usuario_nome'] = "Prof. Carlos";
?>

<!--Header com o perfil teste-->
<header>
    <nav id="mainNavbar" class="navbar bg-white fixed-top py-2 shadow visible-navbar">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <!-- Coluna esquerda -->
            <div style="width: 100px;"></div>

            <!-- Coluna central: imagem + nome -->
            <div class="d-flex align-items-center mx-auto">
            <img src="../imagens/logo.png" alt="Logo" style="height: 40px;">
            <a href="index.php" class="mb-0 fs-1 text-dark fw-bold text-decoration-none ms-2">
                TAU<span class="header_cor">RUS</span>
            </a>
            </div>

            <!-- Coluna direita: perfil do usuário -->
            <div style="width: 100px;" class="text-end">
            <div class="dropdown">
                <a class="nav-link text-dark d-flex align-items-center ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="fs-6 fw-semibold">
                    <?= htmlspecialchars($_SESSION['usuario_nome']); ?>
                </span>
                <i class="bi bi-person-circle ms-2 fs-5"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                <li><a class="dropdown-item" href="perfil.php">Meu Perfil</a></li>
                <li><a class="dropdown-item" href="configuracoes.php">Configurações</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="logout.php">Sair</a></li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>