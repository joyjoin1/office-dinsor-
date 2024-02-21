<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000000;
        }

        .calendar {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
        }

        #calendarBody {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }

        .day {
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .day:hover {
            background-color: #e0e0e0;
        }

        .today {
            background-color: #4caf50;
            color: #fff;
        }

        .selected {
            background-color: #2196f3;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <div class="header">
            <button id="prevMonth">&lt;</button>
            <h2 id="currentMonth"></h2>
            <button id="nextMonth">&gt;</button>
        </div>
        <div id="calendarBody" class="calendar-body"></div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const prevMonthBtn = document.getElementById("prevMonth");
            const nextMonthBtn = document.getElementById("nextMonth");
            const currentMonthDisplay = document.getElementById("currentMonth");
            const calendarBody = document.getElementById("calendarBody");

            let currentDate = new Date();

            function generateCalendar(year, month) {
                const firstDayOfMonth = new Date(year, month, 1);
                const lastDayOfMonth = new Date(year, month + 1, 0);
                const daysInMonth = lastDayOfMonth.getDate();
                const startingDay = firstDayOfMonth.getDay();

                currentMonthDisplay.innerText = new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(firstDayOfMonth);

                calendarBody.innerHTML = "";

                for (let i = 0; i < startingDay; i++) {
                    const emptyDay = document.createElement("div");
                    emptyDay.classList.add("day");
                    calendarBody.appendChild(emptyDay);
                }

                for (let i = 1; i <= daysInMonth; i++) {
                    const day = document.createElement("div");
                    day.classList.add("day");
                    day.innerText = i;

                    if (year === currentDate.getFullYear() && month === currentDate.getMonth() && i === currentDate.getDate()) {
                        day.classList.add("today");
                    }

                    day.addEventListener("click", () => {
                        day.classList.toggle("selected");
                    });

                    calendarBody.appendChild(day);
                }
            }

            generateCalendar(currentDate.getFullYear(), currentDate.getMonth());

            prevMonthBtn.addEventListener("click", () => {
                currentDate.setMonth(currentDate.getMonth() - 1);
                generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
            });

            nextMonthBtn.addEventListener("click", () => {
                currentDate.setMonth(currentDate.getMonth() + 1);
                generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
            });
        });
    </script>
</body>
</html>
