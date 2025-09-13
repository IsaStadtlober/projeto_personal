<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo1.png" type="image/x-icon">
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
                    <div class="card shadow-lg rounded-4 border-0 p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center text-muted mb-4">
                                <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                <span class="px-3 fw-semibold">Passo 1 de 2</span>
                                <hr class="flex-grow-1 border-top border-secondary opacity-50">
                            </div>
                            <h2 class="card-title text-center fw-bold mb-2">CRIAR PLANO</h2>
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
                                    <label class="btn btn-outline-secondary" for="semanal">Plano<br> <strong>SEMANAL</strong></label>
                                    <input type="radio" class="btn-check" name="ciclo" id="mensal" value="mensal" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="mensal">Plano<br> <strong>MENSAL</strong></label>
                                    <input type="radio" class="btn-check" name="ciclo" id="anual" value="anual" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="anual">Plano<br> <strong>ANUAL</strong></label>
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
                            <div class="card shadow-lg border-0 rounded-4 p-2 w-100">
                                <div class="card-body">
                                    <div class="text-start" style="margin-left: -8px;">
                                        <button type="button" class="btn btn-link text-dark p-0" id="btnVoltarSemanal">
                                            <i class="bi bi-arrow-left fs-4"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center text-muted mb-4">
                                        <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                        <span class="px-3 fw-semibold">Passo 2 de 2</span>
                                        <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                    </div>
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
                                    <div class="d-flex justify-content-center gap-2 mt-4 w-100">
                                        <button type="button" class="btn btn-secondary rounded-3 px-4 py-2 btn-Adicionar">Adicionar treino</button>
                                        <button type="submit" class="btn text-white rounded-3 px-4 py-2" style="background-color: #f85e16f1;">Concluir</button>
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
                            <div class="card shadow-lg rounded-4 border-0 p-2 w-100">
                                <div class="card-body">
                                    <div class="text-start" style="margin-left: -8px;">
                                        <button type="button" class="btn btn-link text-dark p-0" id="btnVoltarMensal">
                                            <i class="bi bi-arrow-left fs-4"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center text-muted mb-4">
                                        <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                        <span class="px-3 fw-semibold">Passo 2 de 2</span>
                                        <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                    </div>
                                    <h2 class="card-title text-center fw-bold mb-2">Configuração Mensal</h2>
                                    <p class="text-center mb-5 text-muted">Selecione as semanas e os dias da semana para o plano mensal.</p>
                                    <select class="form-select mb-4" aria-label="Selecione a Semana">
                                        <option selected>Selecione a Semana</option>
                                        <option value="1">Semana 1</option>
                                        <option value="2">Semana 2</option>
                                        <option value="3">Semana 3</option>
                                        <option value="4">Semana 4</option>
                                    </select>
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
                                    <div class="d-flex justify-content-center gap-2 mt-4 w-100">
                                        <button type="button" id="adicionar" class="btn btn-secondary rounded-3 px-4 py-2 btn-Adicionar">Adicionar treino</button>
                                        <button type="submit" class="btn text-white rounded-3 px-4 py-2" style="background-color: #f85e16f1;">Concluir</button>
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
                            <div class="card shadow-lg rounded-4 border-0 p-2 w-100">
                                <div class="card-body">
                                    <div class="text-start" style="margin-left: -8px;">
                                        <button type="button" class="btn btn-link text-dark p-0" id="btnVoltarAnual">
                                            <i class="bi bi-arrow-left fs-4"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center text-muted mb-4">
                                        <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                        <span class="px-3 fw-semibold">Passo 2 de 2</span>
                                        <hr class="flex-grow-1 border-top border-secondary opacity-50">
                                    </div>
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
                                    <select class="form-select mb-4" aria-label="Selecione a Semana">
                                        <option selected>Selecione a Semana</option>
                                        <option value="1">Semana 1</option>
                                        <option value="2">Semana 2</option>
                                        <option value="3">Semana 3</option>
                                        <option value="4">Semana 4</option>
                                    </select>
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
                                    <div class="d-flex justify-content-center gap-2 mt-4 w-100">
                                        <button type="button" class="btn btn-secondary rounded-3 px-4 py-2 btn-Adicionar">Adicionar treino</button>
                                        <button id="concluir" type="button" class="btn text-white rounded-3 px-4 py-2" style="background-color: #f85e16f1;">Concluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal de Adicionar Treino -->
                <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">

                        <!-- Offcanvas dentro do modal -->
                        <div class="offcanvas offcanvas-end position-absolute top-0 end-0 h-100"
                            id="offcanvasTreino" tabindex="-1" aria-labelledby="offcanvasTreinoLabel" data-bs-backdrop="false" style="width: 280px; z-index: 1055; transition: none;">
                            <div class="offcanvas-header">
                                <h6 class="offcanvas-title" id="offcanvasTreinoLabel">SEGUNDA-FEIRA</h6>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
                            </div>
                            <div class="offcanvas-body">
                                <table class="table table-sm table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            <th>Exercício</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Leg press inclinado 45°</td>
                                            <td>
                                                <button class="btn p-0 border-0 bg-transparent me-2" title="Editar">
                                                    <i class="bi bi-pencil text-dark" style="font-size: 1rem;"></i>
                                                </button>
                                                <button class="btn p-0 border-0 bg-transparent" title="Remover">
                                                    <i class="bi bi-trash" style="color: red; font-size: 1rem;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Leg press inclinado 45°</td>
                                            <td>
                                                <button class="btn p-0 border-0 bg-transparent me-2" title="Editar">
                                                    <i class="bi bi-pencil text-dark" style="font-size: 1rem;"></i>
                                                </button>
                                                <button class="btn p-0 border-0 bg-transparent" title="Remover">
                                                    <i class="bi bi-trash" style="color: red; font-size: 1rem;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Leg press inclinado 45°</td>
                                            <td>
                                                <button class="btn p-0 border-0 bg-transparent me-2" title="Editar">
                                                    <i class="bi bi-pencil text-dark" style="font-size: 1rem;"></i>
                                                </button>
                                                <button class="btn p-0 border-0 bg-transparent" title="Remover">
                                                    <i class="bi bi-trash" style="color: red; font-size: 1rem;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Leg press inclinado 45°</td>
                                            <td>
                                                <button class="btn p-0 border-0 bg-transparent me-2" title="Editar">
                                                    <i class="bi bi-pencil text-dark" style="font-size: 1rem;"></i>
                                                </button>
                                                <button class="btn p-0 border-0 bg-transparent" title="Remover">
                                                    <i class="bi bi-trash" style="color: red; font-size: 1rem;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Leg press inclinado 45°</td>
                                            <td>
                                                <button class="btn p-0 border-0 bg-transparent me-2" title="Editar">
                                                    <i class="bi bi-pencil text-dark" style="font-size: 1rem;"></i>
                                                </button>
                                                <button class="btn p-0 border-0 bg-transparent" title="Remover">
                                                    <i class="bi bi-trash" style="color: red; font-size: 1.1rem;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="modal-content position-relative px-3 py-4">

                            <!-- Botão de fechar -->
                            <div class="position-absolute top-0 start-0 m-2 z-3 fs-5">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>

                            <!-- Exercícios Adicionados -->
                            <div class="position-absolute top-0 end-0 m-2 z-3">
                                <button class="btn btn-light d-flex align-items-center gap-2 px-2 py-1 rounded-pill shadow-sm" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTreino" aria-controls="offcanvasTreino">
                                    <i class="bi bi-list fs-6 header_cor"></i>
                                    <span class="fw-semibold text-dark small">Exercícios Adicionados</span>
                                </button>
                            </div>

                            <!-- HEADER -->
                            <div class="modal-header flex-column align-items-center w-100 pt-5 pb-3">
                                <h5 class="modal-title text-center w-100 fs-2 fw-bold" id="meuModalLabel">ADICIONAR TREINO</h5>

                                <!-- Busca + Select -->
                                <div class="d-flex w-100 gap-1 justify-content-center mt-3 mb-4 px-1">
                                    <div class="position-relative w-100">
                                        <input type="search" class="form-control form-control-md ps-5" placeholder="Pesquisar exercício...">
                                        <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3" style="color: gray;"></i>
                                    </div>
                                    <select class="form-select form-select-md w-50">
                                        <option value="">Categorias</option>
                                        <option>Força</option>
                                        <option>Cardio</option>
                                        <option>Luta</option>
                                        <option>Personalização</option>
                                    </select>
                                </div>

                                <!-- Categoria + Dias centralizados lado a lado -->
                                <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap w-100 mb-2">
                                    <h6 class="mb-0 fs-4">SELECIONE O DIA:</h6>
                                    <div class="d-flex gap-3 flex-wrap">
                                        <input type="checkbox" class="btn-check" id="dom" autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle dia-btn" for="dom">D</label>

                                        <input type="checkbox" class="btn-check" id="seg" autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle dia-btn" for="seg">S</label>

                                        <input type="checkbox" class="btn-check" id="ter" autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle dia-btn" for="ter">T</label>

                                        <input type="checkbox" class="btn-check" id="qua" autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle dia-btn" for="qua">Q</label>

                                        <input type="checkbox" class="btn-check" id="qui" autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle dia-btn" for="qui">Q</label>

                                        <input type="checkbox" class="btn-check" id="sex" autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle dia-btn" for="sex">S</label>

                                        <input type="checkbox" class="btn-check" id="sab" autocomplete="off">
                                        <label class="btn btn-outline-dark rounded-circle dia-btn" for="sab">S</label>
                                    </div>
                                </div>
                            </div>

                            <!-- BODY DO MODAL -->
                            <div class="modal-body bg-cor px-3 py-1">

                                <!-- TOPO DOS CARDS TROCADOS -->
                                <div id="topoCards" class="w-100 d-none mb-3 mt-2">
                                    <div class="position-relative w-100">
                                        <!-- Botão de voltar à esquerda -->
                                        <button class="btn btn-secondary btn-sm d-flex align-items-center gap-2 position-absolute start-0 top-0" onclick="restaurarCards()" style="z-index: 1;">
                                            <i class="bi bi-arrow-left"></i>
                                            <span>Voltar</span>
                                        </button>

                                        <!-- Nome centralizado -->
                                        <h4 id="nomeCardSelecionado" class="text-center fw-bold mb-0">MUSCULAÇÃO</h4>
                                    </div>
                                </div>

                                <!-- GRUPO DE CARDS INICIAIS -->
                                <div id="cardsIniciais" class="d-flex flex-column gap-2 align-items-center">
                                    <!-- Card Musculação -->
                                    <div class="card shadow-sm w-100 card-hover card-treino" data-nome="Musculação">
                                        <div class="card-body py-1 px-2 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="../imagens/musculacao.png" alt="Musculação" class="rounded me-3" style="width:95px; height:95px; object-fit:cover;">
                                                <div>
                                                    <strong class="fs-5">Musculação</strong><br>
                                                    <small class="text-muted fs-6">Força</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-arrow-right-circle fs-3 header_cor"></i>
                                        </div>
                                    </div>

                                    <!-- Card Muay Thai -->
                                    <!-- OBS: está sem o card-treino depois do card-hover -->
                                    <div class="card shadow-sm w-100 card-hover" data-nome="Muay Thai">
                                        <div class="card-body py-1 px-2 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="../imagens/muay_thai.png" alt="Muay Thai" class="rounded me-3" style="width:95px; height:95px; object-fit:cover;">
                                                <div>
                                                    <strong class="fs-5">Muay Thai</strong><br>
                                                    <small class="text-muted fs-6">Luta</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-arrow-right-circle fs-3 header_cor"></i>
                                        </div>
                                    </div>

                                    <!-- Card Personalização -->
                                    <!-- OBS: está sem o card-treino depois do card-hover -->
                                    <div class="card shadow-sm w-100 card-hover">
                                        <div class="card-body py-1 px-2 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <i class="bi bi-plus-circle-fill text-dark fs-1"></i>
                                                <div>
                                                    <strong class="fs-5">Personalização</strong><br>
                                                    <small class="text-muted fs-6">Custom</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-arrow-right-circle fs-3 header_cor"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- GRUPO DE CARDS ALTERNATIVOS ESPECÍFICOS PARA MUSCULAÇÃO -->
                                <div id="cardsAlternativosMusculacao" class="d-flex flex-column gap-2 align-items-center d-none">
                                    <!-- Card Agachamento -->
                                    <div class="card shadow-sm w-100 card-hover card-treino" data-nome="Agachamento">
                                        <div class="card-body py-1 px-2 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="../imagens/agachamento.png" alt="Agachamento" class="rounded me-3" style="width:95px; height:95px; object-fit:cover;">
                                                <div>
                                                    <strong class="fs-5">Agachamento</strong><br>
                                                    <small class="text-muted fs-6">Pernas</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-arrow-right-circle fs-3 header_cor"></i>
                                        </div>
                                    </div>

                                    <!-- Card Flexão -->
                                    <div class="card shadow-sm w-100 card-hover card-treino" data-nome="Flexão">
                                        <div class="card-body py-1 px-2 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="../imagens/flexao.png" alt="Flexão" class="rounded me-3" style="width:95px; height:95px; object-fit:cover;">
                                                <div>
                                                    <strong class="fs-5">Flexão</strong><br>
                                                    <small class="text-muted fs-6">Peito</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-arrow-right-circle fs-3 header_cor"></i>
                                        </div>
                                    </div>

                                    <!-- Card Personalização -->
                                    <div class="card shadow-sm w-100 card-hover">
                                        <div class="card-body py-1 px-2 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <i class="bi bi-plus-circle-fill text-dark fs-1"></i>
                                                <div>
                                                    <strong class="fs-5">Personalização</strong><br>
                                                    <small class="text-muted fs-6">Custom</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-arrow-right-circle fs-3 header_cor"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Painel de Detalhes dos Cards Alternativos -->
                                <div id="painelDetalhes" class="bg-white rounded shadow-sm p-3 mt-3 w-100 d-none">
                                    <!-- Botão de fechar -->
                                    <div class="d-flex justify-content-end mb-2">
                                        <button class="btn btn-outline-secondary btn-sm" id="fecharPainel">
                                            <i class="bi bi-x-lg"></i> Fechar
                                        </button>
                                    </div>

                                    <!-- TOPO: Imagem + Título + Músculos + Variações -->
                                    <div class="row g-3 text-center text-lg-start justify-content-center">
                                        <div class="col-12 col-lg-3 text-center">
                                            <img src="../imagens/agachamento.png" alt="Agachamento" class="rounded me-2"
                                                style="width:160px; height:160px; object-fit:cover;">
                                        </div>
                                        <div class="col-12 col-lg-9 text-center text-lg-start">
                                            <h5 id="tituloExercicio" class="fw-bold fs-4 mb-2">Agachamento</h5>
                                            <p class="mb-2"><strong>Músculos Envolvidos:</strong><br>
                                                <span id="musculosExercicio">Quadríceps, Glúteos, Isquiotibiais, Ertores da coluna</span>
                                            </p>
                                            <p class="mb-1"><strong>Variações:</strong><br>
                                                <span id="variacoesExercicio">Sumo, Búlgaro, Frontal, com Halteres</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Linha divisória -->
                                    <hr class="my-3">

                                    <!-- DESCRIÇÃO -->
                                    <div class="mb-4 text-center text-lg-start">
                                        <p><strong class="fs-5">Descrição:</strong><br>
                                            <span id="descricaoExercicio">Execute o movimento como se fosse sentar numa cadeira...</span>
                                        </p>
                                    </div>

                                    <!-- UPLOAD DE MÍDIA -->
                                    <div class="mb-4">
                                        <label class="form-label fw-bold fs-5">Fotos ou vídeos do exercício</label>
                                        <div class="border rounded p-4 text-center bg-light position-relative" style="cursor: pointer;">
                                            <i class="bi bi-cloud-upload fs-1 text-muted mb-2"></i><br>
                                            <span class="text-muted">Arraste arquivos aqui ou clique para enviar</span>
                                            <input type="file" multiple class="form-control mt-2" style="display: none;">
                                        </div>
                                    </div>

                                    <!-- CAMPOS DE ENTRADA: -->
                                    <div class="row g-4 mb-4 text-center text-lg-start fw-bold">
                                        <!-- Coluna 1: Séries + Repetições -->
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Séries</label>
                                                <input type="number" class="form-control" id="inputSeries">
                                            </div>
                                            <div>
                                                <label class="form-label">Repetições</label>
                                                <input type="number" class="form-control" id="inputRepeticoes">
                                            </div>
                                        </div>

                                        <!-- Coluna 2: Carga/Instrumento + Tempo de Descanso -->
                                        <div class="col-12 col-md-6 fw-bold">
                                            <div class="mb-3">
                                                <label class="form-label">Carga / Instrumento</label>
                                                <div class="d-flex gap-2">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Kg:</span>
                                                        <input type="number" class="form-control" id="inputCarga">
                                                    </div>
                                                    <input type="text" class="form-control" id="inputInstrumento" placeholder="Instrumento">
                                                </div>
                                            </div>
                                            <div>
                                                <label class="form-label">Tempo de Descanso</label>
                                                <div class="d-flex gap-2">
                                                    <input type="number" class="form-control w-40" id="inputTempo">
                                                    <input type="text" class="form-control w-60" id="inputForma" placeholder="ex: segundos">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- OBSERVAÇÕES -->
                                    <div class="mb-3 text-center text-lg-start fw-bold fs-5">
                                        <label class="form-label">Observações</label>
                                        <textarea class="form-control" id="inputObservacoes" rows="2"
                                            placeholder="Ex: Foque na profundidade do movimento..."></textarea>
                                    </div>

                                    <!-- BOTÃO FINAL -->
                                    <button class="btn text-white w-100" style="background-color: #f85e16f1;">Adicionar</button>
                                </div>
                            </div>
                        </div>
                    </div>

    </main>
    <?php include '../templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar-scroll.js"></script>
    <script src="../js/criar_plano.js"></script>
    <script src="../js/dadosExercicios.js"></script>
    <script src="../js/cardsTreinos.js"></script>
</body>

</html>