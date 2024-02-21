<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF; /* ตั้งค่าพื้นหลังสีขาว */
        }

        header {
            /*  background-color: #333;*/
            color: #000000;
            padding: 30px;
            text-align: center;
            font-size: 22px; /* เพิ่มขนาดฟ้อน */
            margin-bottom: 50px; /* ขยับลงด้านล่าง */
            margin-top: 100px; /* ขยับลงมา */
            font-weight: normal; /* เอาตัวหนาออก */
        }

        table {
            width: 80%; /* ปรับขนาดของตาราง */
            margin: 20px auto; /* จัดตำแหน่งตารางในกลางหน้าจอ */
            border-collapse: collapse;
            background-color: #FFC7A1; /* ตั้งค่าพื้นหลังสีขาว */
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1); /* เพิ่มเงาใต้ตาราง */
            border-radius: 40px; /* ทำให้มีมุมโค้ง */
            overflow: hidden; /* เพิ่ม overflow: hidden; เพื่อให้ความโค้งที่ถูกต้อง */
            margin-top: 20px
        }

        th, td {
            padding: 20px; /* ปรับระยะห่างระหว่างขอบแถว */
            text-align: center; /* ตั้งให้ตัวหนังสืออยู่ตรงกลาง */
            font-weight: normal; /* เอาความหนาออก */

        }

        th {
            background-color: #FFC7A1;
            color: #000000;
            border: none; /* ลบเส้นขอบทั้งหมดใน th */
            border-bottom: 5px solid #FFFFFF; /* เพิ่มขีดสีขาวด้านล่าง */
        }

        .action-icons i.fas.fa-edit {
            background-color: #95BF7D; /* เปลี่ยนเป็นสีเขียว */
        }

        .action-icons i.fas.fa-trash-alt {
            background-color: #F74242; /* เปลี่ยนเป็นสีแดง */
        }
/* เพิ่มสไตล์สำหรับแถบค้นหา */
.search-bar {
    margin: 20px auto; /* จัดตำแหน่งแถบค้นหาในกลางหน้าจอ */
    text-align: center;
    position: relative; /* เพื่อให้สามารถกำหนดตำแหน่งของไอคอนแว่นขยาย */
}

.search-bar input[type="text"] {
    width: 300px; /* กำหนดความกว้างของช่องค้นหา */
    padding: 10px; /* ปรับขนาด padding */
    border: 2px solid #ccc; /* เพิ่มเส้นขอบ */
    border-radius: 20px; /* ทำให้มีมุมโค้ง */
    outline: none; /* ลบเส้นขอบเมื่อคลิก */
    transition: border-color 0.3s ease; /* เพิ่ม transition เมื่อ hover */
}

/* เพิ่มไอคอนแว่นในช่องค้นหา */
.search-bar .search-icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
}

.search-bar .search-icon i {
    font-size: 18px;
    color: #555; /* สีของไอคอน */
}

.search-bar input[type="text"]:focus {
    border-color: #FF6600; /* เปลี่ยนสีขอบเมื่อไอคอนคำหลักถูกคลิก */
}
     
        .add-device-button {
    background-color: #FF6600;
    color: #FFFFFF;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 20px;
    position: relative; /* เพิ่มการตำแหน่งแบบเกี่ยวข้อง */
    margin-right: 10px;
}

.add-device-button:nth-child(2) {
    margin-left: 1px; /* ปรับ left margin เพื่อเพิ่มระยะห่างระหว่างปุ่ม */
}

.button-container {
    position: absolute;
    top: 250px; /* ปรับตำแหน่งขึ้นบนตามความต้องการ */
    right: 180px; /* ปรับตำแหน่งไปทางขวาตามความต้องการ */
    display: flex;
    
}

    </style>

    <title>รายชื่อพนักงาน</title>

</head>
<body>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">

<div class="home">
<?php include 'home.php';?>
</div>

<header>
        <h>รายชื่อพนักงาน</h>
    </header>

   <!-- เพิ่มแถบค้นหา -->
<div class="search-bar">
    
    <input type="text" placeholder="ค้นหา..."> <!-- เพิ่มพื้นหลังสีขาว ในตาราง -->
</div>

    <!-- ปรับตำแหน่งไปฝั่งขวาไม่ได้สักทีอะ TT -->
    <div class="button-container">
    <a href="adddepartment.php">
        <button class="add-device-button">เพิ่มแผนก</button>
    </a>
    <a href="addemployees.php">
        <button class="add-device-button">เพิ่มพนักงาน</button>
    </a>
</div>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>รูปภาพ</th>
                <th>ชื่อ นามสกุล</th>
                <th>แผนก</th>
                <th>ตำแหน่ง</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- ตำแหน่งนี้จะให้คุณเพิ่มข้อมูลในแต่ละแถวตามความเหมาะสม -->
            <tr>
                <td>1</td>
                <td><img src="assete/p1.jpg" alt="อุปกรณ์ที่ 1" style="max-width: 110px; max-height: 100px;"></td>
                <td>กรกฏ กลับเพชร </td>
                <td>Production</td>
                <td>Production</td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="assete/p1.jpg" alt="อุปกรณ์ที่ 2" style="max-width: 120px; max-height: 80px;"></td>
                <td>แพรวา ปรางค์ทรัพย์</td>
                <td>Graphic</td>
                <td>Graphic</td>
            </tr>
            <!-- เพิ่มแถวตามความเหมาะสม -->
        </tbody>

    </table>
</body>
</html>
