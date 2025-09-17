document.addEventListener("DOMContentLoaded", function () {
  // Cards principais
  const cardControle = document.getElementById('cardControle');
  const cardInicial = document.getElementById('cardInicial');
  const cardSemanal = document.getElementById('cardSemanal');
  const cardMensal = document.getElementById('cardMensal');
  const cardAnual = document.getElementById('cardAnual');

  // Botões de navegação
  const btnVoltarInicial = document.getElementById('btnVoltarInicial');
  const btnProximo = document.getElementById('btnProximo');
  const btnVoltarSemanal = document.getElementById('btnVoltarSemanal');
  const btnVoltarMensal = document.getElementById('btnVoltarMensal');
  const btnVoltarAnual = document.getElementById('btnVoltarAnual');

  /*Botões de Adicionar Treino */
  const btnAdicionarTreino = document.querySelectorAll('.btn-Adicionar');
  const modalAdicionarTreino = document.getElementById('meuModal');

  // Lista dos cards de ciclo e controle de índice
  const cardsCiclo = [cardSemanal, cardMensal, cardAnual];
  let cardIndex = 0;

  // Oculta todos os cards
  function esconderTodos() {
    cardControle.classList.add('d-none');
    cardInicial.classList.add('d-none');
    cardsCiclo.forEach(card => card.classList.add('d-none'));
  }

  // Clica no lápis → abre cardInicial com nome preenchido
  document.querySelectorAll('.editar-plano').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const nomePlano = this.getAttribute('data-nome');
      document.getElementById('nomePlano').value = nomePlano;
      esconderTodos();
      cardInicial.classList.remove('d-none');
      cardIndex = 0;
    });
  });

  // Clica em "Próximo" → avança para o próximo card de ciclo
  btnProximo.addEventListener('click', function () {
    esconderTodos();
    cardsCiclo[cardIndex].classList.remove('d-none');
    cardIndex = (cardIndex + 1) % cardsCiclo.length;
  });

  // Voltar do cardInicial → para cardControle
  btnVoltarInicial.addEventListener('click', function () {
    esconderTodos();
    cardControle.classList.remove('d-none');
  });

  // Voltar dos cards de ciclo → para cardInicial
  btnVoltarSemanal.addEventListener('click', function () {
    esconderTodos();
    cardInicial.classList.remove('d-none');
  });

  btnVoltarMensal.addEventListener('click', function () {
    esconderTodos();
    cardInicial.classList.remove('d-none');
  });

  btnVoltarAnual.addEventListener('click', function () {
    esconderTodos();
    cardInicial.classList.remove('d-none');
  });

  // js para chamar o modal ao clicar no botão "Adicionar Treino"
  btnAdicionarTreino.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const modal = new bootstrap.Modal(modalAdicionarTreino);
      modal.show();
    });
  });
});