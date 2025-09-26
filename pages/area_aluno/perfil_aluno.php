<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagens/logo1.png" type="image/x-icon">
    <title>Meu Perfil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/css_aluno/meu_progresso.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    include '../../templates/sidebar_aluno.php';
    ?>

    <main class="d-flex justify-content-center align-items-center min-vh-100 w-100 position-relative">
        <div class="container my-5 pt-5">
            <div class="row justify-content-center">
                <!-- Card Inicial -->
                <div id="cardInicial" class="col-12 col-md-8 col-lg-6 mx-auto mt-4">
                    <div class="card shadow-lg rounded-4 border-0 p-3">
                        <div class="card-body">
                            <img src="../../imagens/foto_aluno.png" alt="Foto de Perfil"
                                class="rounded-circle d-block mx-auto mb-3"
                                style="width: 120px; height: 120px; object-fit: cover;">
                            <div class="d-flex align-items-center text-muted mb-4">
                                <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                <span class="px-3 fw-semibold">Meu Perfil</span>
                                <hr class="flex-grow-1 border-top border-secondary opacity-50">
                            </div>
                            <p class="mb-3 text-muted">Nome: Diogo da Souza</p>
                            <p class="mb-3 text-muted">Email: diogo34souz@gmail.com</p>
                            <p class="mb-3 text-muted">Telefone: (11) 91234-5678</p>
                            <p class="mb-3 text-muted">Data de Nascimento: 15/05/2002</p>
                            <p class="mb-3 text-muted">CPF: 234.654.934-32</p>
                            <p class="mb-3 text-muted">Endereço: Rua Exemplo, 123 - São Paulo, SP</p>
                            <div class="d-flex justify-content-center gap-2 mt-4 w-100">
                                <button class="btn btn-danger rounded-3 px-4 py-2">Logout</button>
                                <button type="button" onclick="location.href='home_aluno.php'"
                                    class="btn btn-secondary rounded-3 px-4 py-2">Home</button>
                                <button type="button" class="btn text-white rounded-3 px-4 py-2"
                                    style="background-color: #f85e16f1;">Editar Perfil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/navbar-scroll.js"></script>
</body>

</html>