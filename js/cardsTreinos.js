document.addEventListener("DOMContentLoaded", function () {
  const cardsIniciais = document.getElementById('cardsIniciais');
  const cardsAlternativos = document.getElementById('cardsAlternativos');
  const topoCards = document.getElementById('topoCards');
  const nomeCardSelecionado = document.getElementById('nomeCardSelecionado');

  // Função para trocar os cards visíveis
  function trocarCards(nome) {
    cardsIniciais.classList.add('d-none');
    cardsAlternativos.classList.remove('d-none');
    topoCards.classList.remove('d-none');
    nomeCardSelecionado.textContent = nome.toUpperCase();
  }

  // Função para restaurar os cards iniciais
  function restaurarCards() {
    cardsIniciais.classList.remove('d-none');
    cardsAlternativos.classList.add('d-none');
    topoCards.classList.add('d-none');
    nomeCardSelecionado.textContent = '';
  }

  // Torna a função acessível globalmente para o botão de voltar funcionar
  window.restaurarCards = restaurarCards;

  // Ativa os eventos nos cards iniciais
  const cards = document.querySelectorAll('#cardsIniciais .card-treino');
  cards.forEach(card => {
    card.addEventListener('click', function () {
      const nome = card.getAttribute('data-nome');
      if (nome) {
        trocarCards(nome);
      }
    });
  });
});
