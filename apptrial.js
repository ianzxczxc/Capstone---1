document.addEventListener('DOMContentLoaded', function() {
    const monthYear = document.getElementById('month-year');
    const daysContainer = document.getElementById('days');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const timeSlots = document.querySelectorAll('.time-slot');
    const confirmButton = document.getElementById('confirm');
    const selectedDateText = document.getElementById('selected-date'); // <h3> in controls

    const months = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    let currentDate = new Date();
    let today = new Date();
    let selectedTime = null;
    let selectedDate = null;

    function renderCalendar(date) {
        const year = date.getFullYear();
        const month = date.getMonth();
        const firstDay = new Date(year, month, 1).getDay();
        const lastDay = new Date(year, month + 1, 0).getDate();

        monthYear.textContent = `${months[month]} ${year}`;
        daysContainer.innerHTML = '';

        // Previous month's days
        const prevMonthLastDay = new Date(year, month, 0).getDate();
        for (let i = firstDay; i > 0; i--) {
            const dayDiv = document.createElement('div');
            dayDiv.textContent = prevMonthLastDay - i + 1;
            dayDiv.classList.add('fade');
            daysContainer.appendChild(dayDiv);
        }

        // Current month's days
        for (let i = 1; i <= lastDay; i++) {
            const dayDiv = document.createElement('div');
            dayDiv.textContent = i;
            dayDiv.classList.add('day');
            dayDiv.dataset.date = `${year}-${month + 1}-${i}`;

            if (i === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                dayDiv.classList.add('today');
            }

            // Keep selected date highlighted
            if (selectedDate === dayDiv.dataset.date) {
                dayDiv.classList.add('selected');
            }

            dayDiv.addEventListener('click', function() {
                selectDate(dayDiv);
            });

            daysContainer.appendChild(dayDiv);
        }

        // Next month's days
        const nextMonthDays = 7 - new Date(year, month + 1, 0).getDay() - 1;
        for (let i = 1; i <= nextMonthDays; i++) {
            const dayDiv = document.createElement('div');
            dayDiv.textContent = i;
            dayDiv.classList.add('fade');
            daysContainer.appendChild(dayDiv);
        }
    }

    function selectDate(dayDiv) {
        // Remove previous selection
        const previousSelected = document.querySelector('.days div.selected');
        if (previousSelected) {
            previousSelected.classList.remove('selected');
        }

        // Highlight new selection
        dayDiv.classList.add('selected');
        selectedDate = dayDiv.dataset.date;

        // Get day of the week
        const [year, month, day] = selectedDate.split('-').map(Number);
        const selectedDay = new Date(year, month - 1, day);
        const dayName = selectedDay.toLocaleDateString('en-US', { weekday: 'long' });

        // Update the H3 in controls
        selectedDateText.textContent = `${dayName}, ${months[month - 1]} ${day}`;
    }

    prevButton.addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate);
    });

    nextButton.addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate);
    });

    // Time slot selection
    timeSlots.forEach(slot => {
        slot.addEventListener('click', function() {
            timeSlots.forEach(btn => btn.classList.remove('active')); // Remove 'active' from all
            this.classList.add('active'); // Add 'active' to clicked button
            selectedTime = this.dataset.time;
        });
    });

    confirmButton.addEventListener('click', function() {
        if (!selectedDate || !selectedTime) {
            alert('Please select a date and a time slot.');
            return;
        }

        alert(`You have selected ${selectedDate} at ${selectedTime}.`);

        // Reset UI
        resetSelection();
    });

    function resetSelection() {
        // Remove active date highlight
        const previousSelected = document.querySelector('.days div.selected');
        if (previousSelected) {
            previousSelected.classList.remove('selected');
        }
        selectedDate = null;

        // Remove active time slot highlight
        timeSlots.forEach(btn => btn.classList.remove('active'));
        selectedTime = null;

        // Reset H3 text
        selectedDateText.textContent = 'Select a date';
    }

    renderCalendar(currentDate);
});
