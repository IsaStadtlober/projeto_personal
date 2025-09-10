document.addEventListener("DOMContentLoaded", function () {
    const cardInicial = document.getElementById('cardInicial');
    const cardSemanal = document.getElementById('cardSemanal');
    const cardMensal = document.getElementById('cardMensal');
    const cardAnual = document.getElementById('cardAnual');
    const btnVoltarSemanal = document.getElementById('btnVoltarSemanal');
    const btnVoltarMensal = document.getElementById('btnVoltarMensal');
    const btnVoltarAnual = document.getElementById('btnVoltarAnual');

    const cards = [cardSemanal, cardMensal, cardAnual];
    let cardIndex = 0;

    function esconderTodosOsCards() {
        cards.forEach(card => {
            card.classList.add('d-none');
        });
    }

    document.querySelectorAll('.bi-pencil-fill').forEach(icon => {
        icon.addEventListener('click', function (e) {
            e.preventDefault();
            esconderTodosOsCards();
            cardInicial.classList.add('d-none');

            // Mostrar o próximo card na sequência
            cards[cardIndex].classList.remove('d-none');

            // Avança o índice e reinicia se passar do último
            cardIndex = (cardIndex + 1) % cards.length;
        });
    });

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
});
