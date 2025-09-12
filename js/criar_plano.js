document.addEventListener("DOMContentLoaded", function () {
  // Cards principais
  const cardInicial = document.getElementById('cardInicial');
  const cardSemanal = document.getElementById('cardSemanal');
  const cardMensal = document.getElementById('cardMensal');
  const cardAnual = document.getElementById('cardAnual');

  // Botões de navegação
  const btnProximo = document.getElementById('btnProximo');
  const btnVoltarSemanal = document.getElementById('btnVoltarSemanal');
  const btnVoltarMensal = document.getElementById('btnVoltarMensal');
  const btnVoltarAnual = document.getElementById('btnVoltarAnual');

  // Botões de Adicionar Treino
  const btnAdicionarTreino = document.querySelectorAll('.btn-Adicionar');
  const modalAdicionarTreino = document.getElementById('meuModal');

  // Exibe o card de ciclo selecionado
  btnProximo.addEventListener('click', function () {
    const cicloSelecionado = document.querySelector('input[name="ciclo"]:checked');

    if (!cicloSelecionado) {
      alert('Por favor, selecione um ciclo.');
      return;
    }

    cardInicial.classList.add('d-none');

    switch (cicloSelecionado.value) {
      case 'semanal':
        cardSemanal.classList.remove('d-none');
        break;
      case 'mensal':
        cardMensal.classList.remove('d-none');
        break;
      case 'anual':
        cardAnual.classList.remove('d-none');
        break;
    }
  });

  // Voltar dos cards de ciclo → para cardInicial
  btnVoltarSemanal.addEventListener('click', function () {
    cardSemanal.classList.add('d-none');
    cardInicial.classList.remove('d-none');
  });

  btnVoltarMensal.addEventListener('click', function () {
    cardMensal.classList.add('d-none');
    cardInicial.classList.remove('d-none');
  });

  btnVoltarAnual.addEventListener('click', function () {
    cardAnual.classList.add('d-none');
    cardInicial.classList.remove('d-none');
  });

  // Abrir modal ao clicar em "Adicionar Treino"
  btnAdicionarTreino.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const modal = new bootstrap.Modal(modalAdicionarTreino);
      modal.show();
    });
  });
});