document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendarFull');
    const titleEl = document.getElementById('calendarTitle');

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'pt-br',
        headerToolbar: false, // ocultar barra padrão
        selectable: false,
        editable: false,
        showNonCurrentDates: true,
        displayEventTime: false,
        expandRows: true,
        contentHeight: 'auto',
        handleWindowResize: true,

        dayHeaderContent: function (arg) {
            return arg.text.charAt(0); // mostra só a inicial do dia
        },

        datesSet: function (dateInfo) {
            const monthNames = [
                'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
                'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
            ];
            titleEl.textContent = `${monthNames[dateInfo.start.getMonth()]} de ${dateInfo.start.getFullYear()}`;
        }
    });

    calendar.render();

    // Navegação por setas
    document.getElementById('prevMonth').addEventListener('click', () => {
        calendar.prev();
    });

    document.getElementById('nextMonth').addEventListener('click', () => {
        calendar.next();
    });
});
