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
    include '../../templates/sidebar_prof.php';
    ?>

    <main class="d-flex justify-content-center align-items-center min-vh-100 w-100 position-relative">
        <div class="container my-5 pt-5">
            <div class="row justify-content-center">
                <!-- Card Inicial -->
                <div id="cardInicial" class="col-12 col-md-8 col-lg-6 mx-auto mt-4">
                    <div class="card shadow-lg rounded-4 border-0 p-3">
                        <div class="card-body">
                            <img src="../../imagens/foto_prof.png" alt="Foto de Perfil"
                                class="rounded-circle d-block mx-auto mb-3"
                                style="width: 145px; height: 145px; object-fit: cover;">
                            <div class="d-flex align-items-center text mb-4">
                                <hr class="flex-grow-1 border-top border-dark opacity-50">
                                <span class="px-3 fw-semibold fs-4">Meu Perfil</span>
                                <hr class="flex-grow-1 border-top border-dark opacity-50">
                            </div>
                            <strong class="fs-5">Nome: </strong><p class="mb-3 text-muted fs-5">Carlos Da Silva</p>
                            <strong class="fs-5">Email:</strong><p class="mb-3 text-muted fs-5"> carlossilva37@gmail.com</p>
                            <strong class="fs-5">Telefone:</strong><p class="mb-3 text-muted fs-5"> (11) 98547-8521</p>
                            <strong class="fs-5">Data de Nascimento:</strong><p class="mb-3 text-muted fs-5"> 25/11/1975</p>
                            <strong class="fs-5">CPF:</strong><p class="mb-3 text-muted fs-5"> 431.247.665-87</p>
                            <strong class="fs-5">Endereço:</strong><p class="mb-3 text-muted fs-5"> Rua OutroExemplo, 474 - São Paulo, SP</p>
                            <strong class="fs-5">Credencial Profissional:</strong><p class="mb-3 text-muted fs-5"> CREF 105476-G/SP</p>
                            <strong class="fs-5">Modalidades:</strong><p class="mb-3 text-muted fs-5"> Musculação, Calistenia, Boxe</p>
                            <strong class="fs-5">Nível Experiência:</strong><p class="mb-3 text-muted fs-5"> Profissional</p>
                            
                            
                            <div class="d-flex justify-content-center gap-2 mt-5 w-100">
                                <button 
                                    class="btn btn-outline-danger rounded-3 px-4 py-2">Logout
                                </button>
                                <button type="button" onclick="location.href='home_professor.php'"
                                    class="btn btn-outline-secondary rounded-3 px-4 py-2">Home
                                </button>
                                <button type="button" class="btn btn-outline-primary rounded-3 px-4 py-2">Editar Perfil
                                </button>
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