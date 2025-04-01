<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Calendar</title>
    <link rel="stylesheet" href="apptrial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
        <div class="container">

        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>

        <div class="calendar-title">Select Date and Time</div>
        <!-- Calendar in the Center -->
        <div class="calendar">
            <div class="header">
                <div id="prev" class="btn"><i class="fa-solid fa-arrow-left"></i></div>
                <div id="month-year"></div>
                <div id="next" class="btn"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days" id="days"></div>
        </div>

        <!-- AM/PM Selection on the Right -->
        <div class="controls">
            <h3 id="selected-date">Select a date</h3>
            <button class="time-slot" data-time="AM">AM</button>
            <button class="time-slot" data-time="PM">PM</button>
            <button id="confirm" class="confirm-btn">Confirm</button>
        </div>
    </div>

    <script src="apptrial.js"></script>
</body>
</html>
