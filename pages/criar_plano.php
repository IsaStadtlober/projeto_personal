<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
    <title>Criar Planos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/criar_editar.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include '../templates/header.php'; ?>
    <?php
    $currentPage = $_SERVER['REQUEST_URI']; // ou basename($_SERVER['PHP_SELF'])
    include '../templates/sidebar.php';
    ?>

    <main id="mainCriar" class="d-flex justify-content-center align-items-center min-vh-100 w-100 position-relative">
        <div class="container my-5 pt-5">
            <div class="row justify-content-center">
                <!-- Card Inicial -->
                <div id="cardInicial" class="col-12 col-md-8 col-lg-6 mx-auto mt-4">
                    <div class="card shadow-lg rounded-4 border-0 p-4">
                        <div class="card-body">
                            <h2 class="card-title text-center fw-bold mb-2">CONFIGURAR PLANO</h2>
                            <p class="text-center mb-5 text-muted">Dê um nome e uma descrição ao seu plano</p>
                            <form id="formConfigurarPlano">
                                <div class="mb-4">
                                    <label for="nomePlano" class="form-label fw-semibold fs-5">Nome do plano</label>
                                    <input type="text" class="form-control rounded-3" id="nomePlano" name="nomePlano"
                                        placeholder="Ex: Treino de Força Avançado">
                                </div>
                                <div class="mb-4 mt-2">
                                    <label for="objetivoPlano" class="form-label fw-semibold fs-5">Objetivo</label>
                                    <input type="text" class="form-control rounded-3" id="objetivoPlano" name="objetivoPlano"
                                        placeholder="Ex: Com esse plano você vai sair do nível...">
                                </div>
                                <div class="btn-group w-100 mb-4" role="group" aria-label="Tipo de ciclo">
                                    <input type="radio" class="btn-check" name="ciclo" id="semanal" value="semanal" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="semanal">Semanal</label>
                                    <input type="radio" class="btn-check" name="ciclo" id="mensal" value="mensal" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="mensal">Mensal</label>
                                    <input type="radio" class="btn-check" name="ciclo" id="anual" value="anual" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="anual">Anual</label>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-secondary rounded-3" id="btnProximo">Próximo</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Card Semanal-->
                <div class="container d-none mt-2" id="cardSemanal">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="card shadow-lg border-0 rounded-4 p-3 w-100">
                                <div class="card-body">
                                    <button type="button" class="btn btn-link text-dark p-0" id="btnVoltarSemanal">
                                        <i class="bi bi-arrow-left fs-3"></i>
                                    </button>
                                    <h2 class="card-title text-center fw-bold mb-2">Configuração Semanal</h2>
                                    <p class="text-center mb-5 text-muted">Selecione os dias da semana para o plano semanal.</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="domingo" value="domingo" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="domingo">Dom</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="segunda" value="segunda" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="segunda">Seg</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="terca" value="terca" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="terca">Ter</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="quarta" value="quarta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="quarta">Qua</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="quinta" value="quinta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="quinta">Qui</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="sexta" value="sexta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="sexta">Sex</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="sabado" value="sabado" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="sabado">Sáb</label>
                                    </div>
                                    <div class="text-center mt-4 w-100 d-grid">
                                        <button type="submit" class="btn btn-secondary rounded-3">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Card Mensal-->
                <div class="container d-none mt-2" id="cardMensal">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="card shadow-lg rounded-4 border-0 p-3 w-100">
                                <div class="card-body">
                                    <button type="button" class="btn btn-link text-dark p-0" id="btnVoltarMensal">
                                        <i class="bi bi-arrow-left fs-3"></i>
                                    </button>
                                    <h2 class="card-title text-center fw-bold mb-2">Configuração Mensal</h2>
                                    <p class="text-center mb-5 text-muted">Selecione as semanas e os dias da semana para o plano mensal.</p>

                                    <div class="d-flex flex-wrap gap-2 justify-content-center mb-4">
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana1" value="semana1" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana1">Semana 1</label>
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana2" value="semana2" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana2">Semana 2</label>
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana3" value="semana3" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana3">Semana 3</label>
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana4" value="semana4" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana4">Semana 4</label>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="domingoMensal" value="domingo" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="domingoMensal">Dom</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="segundaMensal" value="segunda" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="segundaMensal">Seg</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="tercaMensal" value="terca" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="tercaMensal">Ter</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="quartaMensal" value="quarta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="quartaMensal">Qua</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="quintaMensal" value="quinta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="quintaMensal">Qui</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="sextaMensal" value="sexta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="sextaMensal">Sex</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="sabadoMensal" value="sabado" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="sabadoMensal">Sáb</label>
                                    </div>

                                    <div class="text-center mt-4 w-100 d-grid">
                                        <button type="submit" class="btn btn-secondary rounded-3">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Anual -->
                <div class="container d-none mt-4" id="cardAnual">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="card shadow-lg rounded-4 border-0 p-3 w-100">
                                <div class="card-body">
                                    <button type="button" class="btn btn-link text-dark p-0" id="btnVoltarAnual">
                                        <i class="bi bi-arrow-left fs-3"></i>
                                    </button>
                                    <h2 class="card-title text-center fw-bold mb-2">Configuração Anual</h2>
                                    <p class="text-center mb-5 text-muted">Selecione os meses, semanas e dias da semana para o plano anual.</p>

                                    <select class="form-select mb-4" aria-label="Selecione o Mês">
                                        <option selected>Selecione o Mês</option>
                                        <option value="1">Janeiro</option>
                                        <option value="2">Fevereiro</option>
                                        <option value="3">Março</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Maio</option>
                                        <option value="6">Junho</option>
                                        <option value="7">Julho</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Setembro</option>
                                        <option value="10">Outubro</option>
                                        <option value="11">Novembro</option>
                                        <option value="12">Dezembro</option>
                                    </select>

                                    <div class="d-flex flex-wrap gap-2 justify-content-center mb-4">
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana1Anual" value="semana1" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana1Anual">Semana 1</label>
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana2Anual" value="semana2" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana2Anual">Semana 2</label>
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana3Anual" value="semana3" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana3Anual">Semana 3</label>
                                        <input type="checkbox" class="btn-check" name="semanas[]" id="semana4Anual" value="semana4" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="semana4Anual">Semana 4</label>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="domingoAnual" value="domingo" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="domingoAnual">Dom</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="segundaAnual" value="segunda" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="segundaAnual">Seg</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="tercaAnual" value="terca" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="tercaAnual">Ter</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="quartaAnual" value="quarta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="quartaAnual">Qua</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="quintaAnual" value="quinta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="quintaAnual">Qui</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="sextaAnual" value="sexta" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="sextaAnual">Sex</label>
                                        <input type="checkbox" class="btn-check" name="diasSemana[]" id="sabadoAnual" value="sabado" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="sabadoAnual">Sáb</label>
                                    </div>

                                    <div class="text-center mt-4 w-100 d-grid">
                                        <button type="submit" class="btn btn-secondary rounded-3">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
    <script src="../js/criar_plano.js"></script>
</body>

</html>