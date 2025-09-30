document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendarFull');
    const titleEl = document.getElementById('calendarTitle');

    // Inicializa o calendário
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'pt-br',
        headerToolbar: false, // oculta a barra de navegação padrão
        selectable: false,
        editable: false,
        showNonCurrentDates: true,
        displayEventTime: false,
        expandRows: true,
        contentHeight: 'auto',
        handleWindowResize: true,

        // Mostra apenas a inicial dos dias da semana
        dayHeaderContent: arg => arg.text.charAt(0),

        // Atualiza o título com mês e ano
        datesSet: dateInfo => {
            const monthNames = [
                'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
                'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
            ];
            titleEl.textContent = `${monthNames[dateInfo.start.getMonth()]} de ${dateInfo.start.getFullYear()}`;
        }
    });

    calendar.render();

    // Navegação entre meses
    document.getElementById('prevMonth').addEventListener('click', () => calendar.prev());
    document.getElementById('nextMonth').addEventListener('click', () => calendar.next());
});
