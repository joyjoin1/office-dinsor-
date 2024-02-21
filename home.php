<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            margin: 10;
            padding: 0;
            font-family: 'Prompt', sans-serif;
        }

        header {
            
            color: #fffff;
            padding: 5px;
            text-align: center;
        }

        nav {
            background-color: #FFFFFF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
        }

        nav a {
            text-decoration: none;
            color: #000000;
            padding: 5px 20px;
            border-radius: 18px;
            transition: background-color 0.3s ease;
            position: relative;
        }

        nav a:hover {
            background-color: #FF6600;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        
        }

        .dropdown-content {
            display: none; 
            position: absolute;
            background-color: #FED3B6;
            min-width: 180px;
            box-shadow: 0 0 0 rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 18px 18px 18px 18px;
            text-align: center; /* ตั้งค่าให้ตัวหนังสืออยู่ตรงกลาง */
            top: 125%; /* ปรับตำแหน่ง dropdown ไปทางล่าง */
            max-height: 150px; /* ปรับความยาวสูงสุดของ dropdown */
        }

        .dropdown-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
            transition: background-color 0.5s ease;
         
        }
        

        .dropdown-content a:hover {
            background-color: #FFECE1;
            color: #FF6600;
            
        }

        .dropdown:hover .dropdown-content {
            display: block;
            visibility: visible; /* เพิ่มบรรทัดนี้ */
            opacity: 1; /* เพิ่มบรรทัดนี้ */
            
        }

        .profile-link-wrapper {
          position: relative;
          display: inline-block;
}

    .profile-link-wrapper .dropdown-content {
        display: none; 
position: absolute;
background-color: #FED3B6;
min-width: 180px;
box-shadow: 0 0 0 rgba(0,0,0,0.2);
z-index: 1;
border-radius: 18px 18px 18px 18px;
text-align: center;
top: 125%;
right: 0; /* เพิ่มบรรทัดนี้เพื่อให้ dropdown หันมาทางซ้าย */
max-height: 150px;

    }

    .profile-link-wrapper:hover .dropdown-content {
        display: block;
    }
        .company-name {
            font-weight: bold;
            margin-left: auto;
            font-family: 'Segoe Script', sans-serif;
            color: #FF6600;
            font-size: 20px;
        }
    </style>
</head>
<body>

    <nav>
        <div>
            <a href="dashboard.php">Dashboard</a>

            <div class="dropdown">
                <a href="#">อุปกรณ์</a>
                <div class="dropdown-content">
                    <a href="listequipment.php">รายการคลังอุปกรณ์</a>
                    <a href="borrowequipment.php">ยืมอุปกรณ์</a>
                    <a href="requesttoborrowequipment.php">คำขอยืมอุปกรณ์</a>
                    <a href="historyequipment.php">ประวัติการยืมอุปกรณ์</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="#">ปฎิทิน</a>
                <div class="dropdown-content">
                    <a href="patitin.php">ปฏิทิน</a>
                    <a href="listevent.php">รายการอีเว้นท์</a>
                    <a href="createactivity.php">สร้างกิจกรรม</a>
                </div>
            </div>

            <a href="listemployees.php">พนักงาน</a>      
        </div>

        <span class="company-name">Dinsor Advertising</span>

<div class="profile-link-wrapper">
        <a href="#">
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-content">
            <a href="login.php">ออกจากระบบ</a>
        </div>
    </div>


    <!-- นี่คือส่วนเนื้อหาหลักของเว็บไซต์ -->

</body>
</html>
