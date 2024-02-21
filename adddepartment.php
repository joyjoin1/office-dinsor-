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
            margin-top: 100px; /* ขยับลงมา */
            font-weight: normal; /* เอาตัวหนาออก */
        }
        table {
            width: 80%; /* ปรับขนาดของตาราง */
            margin: 20px auto; /* จัดตำแหน่งตารางในกลางหน้าจอ */
            border-collapse: collapse;
            background-color: #D0D1D5; /* ตั้งค่าพื้นหลังสีขาว */
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1); /* เพิ่มเงาใต้ตาราง */
            border-radius: 40px; /* ทำให้มีมุมโค้ง */
            overflow: hidden; /* เพิ่ม overflow: hidden; เพื่อให้ความโค้งที่ถูกต้อง */
            margin top:  10px
        }

        th, td {
            padding: 20px; /* ปรับระยะห่างระหว่างขอบแถว */
            text-align: center; /* ตั้งให้ตัวหนังสืออยู่ตรงกลาง */
            font-weight: normal; /* เอาความหนาออก */

        }

        th {
            background-color: #D0D1D5;
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

        /* เพิ่มแผนก */
        .container {
            background-color: #fff;
            border: 2px solid #FF6600;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 40px;
            max-width: 1020px; /* ปรับเพิ่มความกว้างสูงสุด */
            width: 80%; /* ปรับเพื่อให้ container ไม่เกิน 80% ของ viewport */
            margin: auto; /* ทำให้ container ตรงกลาง */
            padding: 20px;
            margin: 10px auto; 
        }


        label {
            display: inline-block; /* ทำให้ label แสดงตรงข้ามกับ input */
            margin-bottom: 8px;
            margin-right: 8px; /* ระยะห่างขวา */
        }

        input {
            
        width: calc(280px);/* กำหนดความกว้างของ input ให้ครอบ label ด้วย margin */
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #D0D1D5;
        background-color: #D0D1D5;/* ให้พื้นหลังของ label เป็นสีดำ */
        border-radius: 40px;/* ทำให้มีมุมโค้ง */
        margin: 5px;/* ขยับไปทางบน-ล่าง และทางซ้าย-ขวา (auto) */
        }

button {
    background-color: #FF6600;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 40px;
   
}

button.cancel {
    background-color: #FF6600;
    margin-left: 8px; /* ระยะห่างซ้าย */
    border-radius: 40px;/* ทำให้มีมุมโค้ง */
}

    </style>

    <title>เพิ่มแผนก</title>

</head>
<body>

<div class="home">
<?php include 'home.php';?>
</div>

<header>
        <h>เพิ่มแผนก</h>
    </header>

    <div class="container">
    <form action="process.php" method="post">
        <label for="department">แผนก</label>
        <input type="text" id="department" name="department" required>

        <label for="position">ตำแหน่ง</label>
        <input type="text" id="position" name="position" required>

        <button type="submit">บันทึก</button>
        <button type="button" class="cancel">ยกเลิก</button>
    </form>
</div>


    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>แผนก</th>
                <th>ตำแหน่ง</th>
                <th></th>
    
            </tr>
        </thead>
        <tbody>
            <!-- ตำแหน่งนี้จะให้คุณเพิ่มข้อมูลในแต่ละแถวตามความเหมาะสม -->
            <tr>
                <td>1</td>
                <td>Production</td>
                <td>Production</td>
                <td class="action-icons">
                    <i class="fas fa-trash-alt" title="ลบทิ้ง"></i>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Graphic</td>
                <td>Graphic</td>
                <td class="action-icons">
                    <i class="fas fa-trash-alt" title="ลบทิ้ง"></i>
                </td>
            </tr>
            <!-- เพิ่มแถวตามความเหมาะสม -->
        </tbody>
    </table>

</body>
</html>
