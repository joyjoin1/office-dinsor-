<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous" defer></script>
  <style>
    body {
      font-family: 'Prompt', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center; /* จัดให้ปฏิทินอยู่ตรงกลาง */
      justify-content: center;
      height: 100vh;
      margin: 0; 
    }

    #calendar {
      width: 70%; /* ปรับความกว้างของปฏิทิน */
      max-width: 600px; /* ตั้งค่าความกว้างสูงสุด */
      height: 400px; /* ปรับความสูงของปฏิทิน */
      margin: 20px;
      
    }
  </style>
</head>
<body>

  <div id="calendar"></div>

  <script defer>
    document.addEventListener('DOMContentLoaded', function() {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        events: [
          {
            title: 'งานประชุม',
            start: '2024-02-20T10:00:00',
            end: '2024-02-20T12:00:00'
          },
          {
            title: 'นัดหมายแพทย์',
            start: '2024-02-22T14:30:00',
            end: '2024-02-22T15:30:00'
          }
          // เพิ่มรายการกิจกรรมเพิ่มเติมตามต้องการ
        ]
      });
    });
  </script>

</body>
</html>
