document.addEventListener("DOMContentLoaded", function () {
  // Elementos principais do modal
  const cardsIniciais = document.getElementById('cardsIniciais');
  const topoCards = document.getElementById('topoCards');
  const nomeCardSelecionado = document.getElementById('nomeCardSelecionado');
  const painelDetalhes = document.getElementById('painelDetalhes');
  const btnFecharPainel = document.getElementById('fecharPainel');
  const modalBody = document.querySelector('.modal-body');

  // Campos de detalhes do exercício
  const tituloExercicio = document.getElementById('tituloExercicio');
  const musculosExercicio = document.getElementById('musculosExercicio');
  const variacoesExercicio = document.getElementById('variacoesExercicio');
  const descricaoExercicio = document.getElementById('descricaoExercicio');
  const inputSeries = document.getElementById('inputSeries');
  const inputRepeticoes = document.getElementById('inputRepeticoes');
  const inputCarga = document.getElementById('inputCarga');
  const inputTempo = document.getElementById('inputTempo');
  const inputObservacoes = document.getElementById('inputObservacoes');

  // Função para trocar para o grupo correto de cards alternativos
  function trocarCards(nome, grupoId) {
    cardsIniciais.classList.add('d-none');
    topoCards.classList.remove('d-none');
    nomeCardSelecionado.textContent = nome.toUpperCase();

    // Oculta todos os grupos de alternativos
    document.querySelectorAll('[id^="cardsAlternativos"]').forEach(grupo => {
      grupo.classList.add('d-none');
    });

    // Mostra o grupo específico
    const grupoSelecionado = document.getElementById(grupoId);
    if (grupoSelecionado) {
      grupoSelecionado.classList.remove('d-none');
    }

    // Oculta painel de detalhes se estiver aberto
    painelDetalhes.classList.remove('show');
    modalBody.classList.remove('travar-scroll');
    setTimeout(() => {
      painelDetalhes.classList.add('d-none');
    }, 300);
  }

  // Função para restaurar os cards iniciais
  function restaurarCards() {
    cardsIniciais.classList.remove('d-none');
    topoCards.classList.add('d-none');
    nomeCardSelecionado.textContent = '';

    // Oculta todos os grupos de alternativos
    document.querySelectorAll('[id^="cardsAlternativos"]').forEach(grupo => {
      grupo.classList.add('d-none');
    });

    painelDetalhes.classList.remove('show');
    modalBody.classList.remove('travar-scroll');
    setTimeout(() => {
      painelDetalhes.classList.add('d-none');
    }, 300);
  }

  // Torna a função acessível globalmente
  window.restaurarCards = restaurarCards;

  // Clique nos cards iniciais
  document.querySelectorAll('#cardsIniciais .card-treino').forEach(card => {
    card.addEventListener('click', function () {
      const nome = card.getAttribute('data-nome');

      if (!nome) return;

      // Define qual grupo de cards alternativos abrir
      switch (nome) {
        case "Musculação":
          trocarCards(nome, "cardsAlternativosMusculacao");
          break;
        case "Muay Thai":
          trocarCards(nome, "cardsAlternativosLuta");
          break;
        case "Cardio":
          trocarCards(nome, "cardsAlternativosCardio");
          break;
        default:
          // Se não houver grupo definido, não faz nada
          break;
      }
    });
  });

  // Clique nos cards alternativos para mostrar detalhes
  document.querySelectorAll('[id^="cardsAlternativos"] .card-treino').forEach(card => {
    card.addEventListener('click', function () {
      const nome = card.getAttribute('data-nome');
      if (exerciciosDetalhados[nome]) {
        mostrarDetalhes(nome);
      }
    });
  });

  // Exibe painel de detalhes com dados do exercício
  function mostrarDetalhes(nome) {
    const dados = exerciciosDetalhados[nome];
    if (!dados) return;

    // Preenche os campos com os dados
    tituloExercicio.textContent = dados.titulo;
    musculosExercicio.textContent = dados.musculos;
    variacoesExercicio.textContent = dados.variacoes;
    descricaoExercicio.textContent = dados.descricao;

    // Exibe o painel com animação
    painelDetalhes.classList.remove('d-none');
    modalBody.classList.add('travar-scroll');
    setTimeout(() => {
      painelDetalhes.classList.add('show');
    }, 10);
  }

  // Fecha o painel de detalhes
  btnFecharPainel.addEventListener('click', () => {
    painelDetalhes.classList.remove('show');
    modalBody.classList.remove('travar-scroll');
    setTimeout(() => {
      painelDetalhes.classList.add('d-none');
    }, 300);
  });
});
