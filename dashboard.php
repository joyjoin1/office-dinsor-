<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="ใส่ค่า integrity ที่ถูกต้องตาม CDN" crossorigin="anonymous" defer></script>
  <style>
    body {
      font-family: 'Prompt', sans-serif;
      display: flex;
      flex-direction: column;
      height: 100vh;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    #dashboard {
      display: flex;
      justify-content: space-between; 
      align-items: flex-start; 
      padding: 20px; 
    }

    .dashboard-block {
      width: 150px;
      height: 80px;
      background-color: #FF6600;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin: 20px;
      border-radius: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .dashboard-block h2,
    .dashboard-block p {
      margin: 0;
      font-size: 20px; 
    }

    #employeeBlock h2::before {
      content: '\1F468'; 
      display: block;
      font-size: 30px;
      margin-bottom: 10px;
    }

    #eventBlock h2::before {
      content: '\1F4C5'; 
      display: block;
      font-size: 30px;
      margin-bottom: 10px;
    }

    #equipmentBlock h2::before {
      content: '\1F6E0'; 
      display: block;
      font-size: 30px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="home">
  <?php include 'home.php';?>
</div>

<div id="dashboard">
  <div>
    <div class="dashboard-block" id="employeeBlock">
      <h2>พนักงาน</h2>
      <p id="employeeCount">0</p>
    </div>

    <div class="dashboard-block" id="eventBlock">
      <h2>อีเว้นท์</h2>
      <p id="eventCount">0</p>
    </div>

    <div class="dashboard-block" id="equipmentBlock">
      <h2>อุปกรณ์ที่ยืม</h2>
      <p id="equipmentCount">0</p>
    </div>
  </div>
</div>

<script defer>
  document.addEventListener('DOMContentLoaded', function() {
    // ข้อมูลจำลอง
    const employeeCount = 10;
    const eventCount = 5;
    const equipmentCount = 3;

    // กำหนดค่าข้อมูลในบล็อก
    document.getElementById('employeeCount').innerText = employeeCount;
    document.getElementById('eventCount').innerText = eventCount;
    document.getElementById('equipmentCount').innerText = equipmentCount;
  });
</script>

</body>
</html>
