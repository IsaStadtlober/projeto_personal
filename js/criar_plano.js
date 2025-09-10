// Selecionar os elementos necessários
const cardInicial = document.getElementById('cardInicial');
const cardSemanal = document.getElementById('cardSemanal');
const cardMensal = document.getElementById('cardMensal');
const cardAnual = document.getElementById('cardAnual');
const btnProximo = document.getElementById('btnProximo');
const btnVoltarSemanal = document.getElementById('btnVoltarSemanal');
const btnVoltarMensal = document.getElementById('btnVoltarMensal');
const btnVoltarAnual = document.getElementById('btnVoltarAnual');

// Gerenciar o clique no botão "Próximo"
btnProximo.addEventListener('click', function () {
    const cicloSelecionado = document.querySelector('input[name="ciclo"]:checked');

    if (!cicloSelecionado) {
        alert('Por favor, selecione um ciclo.');
        return;
    }

    // Ocultar o card inicial
    cardInicial.classList.add('d-none');

    // Exibir o card correspondente ao ciclo selecionado
    if (cicloSelecionado.value === 'semanal') {
        cardSemanal.classList.remove('d-none');
    } else if (cicloSelecionado.value === 'mensal') {
        cardMensal.classList.remove('d-none');
    } else if (cicloSelecionado.value === 'anual') {
        cardAnual.classList.remove('d-none');
    }
});

// Gerenciar o clique no botão "Voltar" para cada card
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