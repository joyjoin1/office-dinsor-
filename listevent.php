<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- เพิ่มลิงก์สำหรับ Font Awesome -->
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

        .action-icons i {
            cursor: pointer;
            transition: color 0.3s ease;
            background-color: #FF6600; /* เพิ่มสีพื้นหลัง */
            border-radius: 150%; /* ทำให้เป็นวงกลม */
            padding: 8px; /* ปรับขนาด padding ตามต้องการ */
            margin-right: 5px; /* ปรับระยะห่างระหว่างไอคอน */
        }

        .action-icons i:hover {
            color: #FFFFFF; /* เปลี่ยนสีของไอคอนเมื่อ hover */
        }

        .action-icons i.fas.fa-edit {
            background-color: #95BF7D; /* เปลี่ยนเป็นสีเขียว */
        }

        .action-icons i.fas.fa-trash-alt {
            background-color: #F74242; /* เปลี่ยนเป็นสีแดง */
        }

        /* เพิ่มสไตล์สำหรับแถบค้นหา */
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

        .search-bar input[type="text"]:focus {
            border-color: #FF6600; /* เปลี่ยนสีขอบเมื่อไอคอนคำหลักถูกคลิก */
        }

        .search-icon {
            background-color: #FF6600; /* สีพื้นหลังของไอคอนค้นหา */
            padding: 10px; /* ปรับขนาด padding เพื่อให้ไอคอนกลมมากขึ้น */
            
            border-radius: 80%; /* ทำให้เป็นวงกลม */
            cursor: pointer;
            position: absolute; /* ตำแหน่งเป็น absolute เพื่อให้สามารถกำหนดตำแหน่งได้ */
            right: 550px; /* ตำแหน่งไอคอนจากขวา */
            top: 50%; /* ตำแหน่งไอคอนตรงกลางแนวตั้ง */
            transform: translateY(-50%); /* ย้ายไอคอนขึ้นไปให้อยู่ตรงกลางแนวตั้ง */
            transition: background-color 0.3s ease; /* เพิ่ม transition เมื่อ hover */
        }


        .search-icon i {
            color: #FFFFFF; /* สีไอคอน */
        }

        .search-icon:hover {
            background-color: #FF4500; /* เปลี่ยนสีพื้นหลังของไอคอนเมื่อ hover */
        }
        /* สไตล์สำหรับ input ประเภทวันที่ */
        .search-bar input[type="date"] {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 20px;
            outline: none;
            margin-left: 10px;
        }

        .search-bar input[type="date"] {
            width: 150px;
        }
    
        input, select {
            width: calc(380px);
            padding: 10px;
            box-sizing: border-box;
            border-radius: 40px;
            margin: 4px;
            box-shadow: inset 2px 2px 0.1px rgba(0, 0, 0, 0.1);
        }

/* เพิ่ม input ประเภทวันที่สำหรับวันที่เริ่มต้น */
input[type="date"]#startDate  {
    margin-left: auto; /* ให้ margin-left เป็น auto */
    margin-right: -1050px; /* ปรับ margin-right ตามที่ต้องการ */
    margin-top: -45px; 
    float: right; /* ชิดขวา */
}

/* เพิ่ม input ประเภทวันที่สำหรับวันที่สิ้นสุด */
input[type="date"]#endDate {
    margin-left: auto; /* ให้ margin-left เป็น auto */
    margin-right: 170px; /* ปรับ margin-right ตามที่ต้องการ */
    margin-top: -45px; 
    float: right; /* ชิดขวา */ 
}


        .date-inputs {
            display: flex;
        }

        #equipmentType {
    width: calc(280px);
    padding: 10px;
    box-sizing: border-box;
    border-radius: 40px;
    margin: 5px;
    font-size: 13px; 
}

        /* หัวข้อ */
        label[for="equipmentType"] {
        color: #888;
        font-size: 14px;
        margin-bottom: 5px;
        display: block;
        margin-top: -50px;
        }


</style>
    <title>รายการอีเว้นท์</title>
</head>

<body>

<div class="home">
<?php include 'home.php';?>
</div>

    <header>
    <h>รายการอีเว้นท์</h>
    </header>

    <div class="search-bar">

    <label for="equipmentType" style="color: #888;">เลือกผู้เกี่ยวข้อง</label>
            <select id="equipmentType" name="equipmentType" required>
                <option value="option1">AE</option>
                <option value="option2">Developer</option>
                <option value="option3">Graphic Designer</option>
                <option value="option4">Editor</option>
                <option value="option5">Production</option>
            </select>

    <div class="date-inputs"> 
   
        <input type="date" id="startDate" name="startDate">  <!-- เพิ่ม input ประเภทวันที่สำหรับวันที่เริ่มต้น -->
  
        <input type="date" id="endDate" name="endDate"> <!-- เพิ่ม input ประเภทวันที่สำหรับวันที่สิ้นสุด -->
    </div>
    </div>  

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>ชื่อกิจกรรม</th>
                <th>สถานที่</th>
                <th>ผู้เกี่ยวข้อง</th>
                <th>รายละเอียด</th>
                <th>วันที่เริ่มต้นกิจกรรม</th>
                <th>วันที่สิ้นสุดกิจกรรม</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
            <!-- ตำแหน่งนี้จะให้คุณเพิ่มข้อมูลในแต่ละแถวตามความเหมาะสม -->
            <tr>
            <td>1</td>
                <td>บริษัทดินสอชั้น 2 </td>
                <td>ประชุมงาน AD</td>
                <td>Graphic</td>
                <td>เตรียมความพร้อมก่อนเริ่มงาน</td>
                <td>10/02/2567 10:00 น.</td>
                <td>10/02/2567 11:30 น.</td>
                <td class="action-icons">
                <a href="editequipment.php" title="แก้ไข">
                <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-alt" title="ลบทิ้ง"></i>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>บริษัทดินสอชั้น 2 </td>
                <td>ประชุมงาน AB</td>
                <td>Graphic</td>
                <td>สรุปผลงาน</td>
                <td>10/03/2567 15:00 น.</td>
                <td>10/03/2567 16:30 น.</td>
                <td class="action-icons">
                <a href="editequipment.php" title="แก้ไข">
                <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-alt" title="ลบทิ้ง"></i>
                </td>
            </tr>
            <!-- เพิ่มแถวตามความเหมาะสม -->
        </tbody>
    </table>

</body>
</html>
