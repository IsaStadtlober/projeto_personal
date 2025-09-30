document.addEventListener('DOMContentLoaded', function () {
    const calendar = new tui.Calendar('#calendar', {
        defaultView: 'month',
        usageStatistics: false,
        isReadOnly: true, // Impede seleção de dias
        month: {
            visibleWeeksCount: 6,
            startDayOfWeek: 0,
            dayNames: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
            isAlways6Weeks: true
        },
        template: {
            monthDayName: function (dayName) {
                return `<span class="text-muted">${dayName.label}</span>`;
            }
        }
    });

    function updateCalendarTitle(cal) {
        const date = cal.getDate();
        const monthNames = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
        const title = `${monthNames[date.getMonth()]} ${date.getFullYear()}`;
        document.getElementById('calendarTitle').textContent = title;
    }

    updateCalendarTitle(calendar);

    document.getElementById('prevMonth').addEventListener('click', () => {
        calendar.prev();
        updateCalendarTitle(calendar);
    });

    document.getElementById('nextMonth').addEventListener('click', () => {
        calendar.next();
        updateCalendarTitle(calendar);
    });
});
