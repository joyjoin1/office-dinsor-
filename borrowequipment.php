<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>ยืมอุปกรณ์</title>
    <style>


      header {
           
            padding: 30px;
            text-align: center;
            font-size: 22px;
            margin-bottom: 30px;
            margin-top: 100px; /* ปรับค่านี้เพื่อขยับลงมา */
            font-weight: normal;
        }

        body {
             font-family: 'Prompt', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
        }

        .right-panel {
            border: 1px solid #FF6600;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: #FFFFFF;
            padding: 20px;
            width: 50%;
            box-sizing: border-box;
            border-radius: 40px;
            margin-top: -460px;
            margin-left: -100px;
            max-height: calc(100vh - 40px); /* ความสูงสูงสุดเท่ากับ 100vh - 40px (20px ขอบบนและล่าง) */
            overflow-y: auto; /* เพิ่มการเลื่อนแถบเลื่อนเมื่อเกินขนาด max-height */     
    }

    .left-panel {
        border: 1px solid #FF6600; /* เปลี่ยนเป็นเส้นขอบสีส้ม */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        background-color: #FFFFFF; /* สีพื้นหลังให้เป็นสีขาว */
        padding: 20px;
        width: 30%;
        box-sizing: border-box;
        border-radius: 40px;
        margin-top: -300px;
        margin-right: -100px;
  
    }
  
       /* ให้ label อยู่ตรงกลาง */
    label {
        margin-bottom: 10px;
        display: flex;
        justify-content: center;
        margin-right: 30px;
    }

        input, select {     /* ช่องกรอกข้อมูล */
            width: calc(380px);/* กำหนดความกว้างของ input ให้ครอบ label ด้วย margin */
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #FFD4B7;
            background-color: #FFD4B7; /* ให้พื้นหลังของ label เป็นสีดำ */
            border-radius: 40px;  /* ทำให้มีมุมโค้ง */
            margin: 4px ; /* ขยับไปทางบน-ล่าง และทางซ้าย-ขวา (auto) */
            box-shadow: inset 2px 2px 0.1px rgba(0, 0, 0, 0.1);

        }
        button {
        background-color: #FF6600;
        color: #FFFFFF;
        border: none;
        border-radius: 40px; /* ทำให้มีมุมโค้ง */
        cursor: pointer;
        width: 60px; /* ปรับความกว้างของฟอร์ม */
        height: 40px;
        margin: auto; /* ทำให้ปุ่มอยู่ตรงกลางทั้งแนวนอนและแนวตั้ง */
        
    }

        .right-panel table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .right-panel th {
            padding: 10px;
            text-align: left;
            color: #FF6600;
        }

        .right-panel td {
            padding: 10px;
            text-align: left;
            color: #000000;
        }

        .action-icons i.fas.fa-trash-alt {
        background-color: #F74242; /* กำหนดสีพื้นหลังเป็นสีแดง */
        color: #FFFFFF; /* กำหนดสีข้อความในไอคอนเป็นสีขาว */
        border-radius: 50%; /* ทำให้มีรูปร่างเป็นวงกลม */
        padding: 8px; /* ปรับขนาด padding */
        margin-right: 5px; /* ปรับระยะห่างระหว่างไอคอน */
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease; /* เพิ่ม transition เพื่อทำให้มีการเปลี่ยนสีเรียบขึ้นเมื่อ hover */
    }

        .action-icons i.fas.fa-trash-alt:hover {
        background-color: #FFFFFF; /* เปลี่ยนสีพื้นหลังเป็นสีขาวเมื่อ hover */
        color: #F74242; /* เปลี่ยนสีข้อความในไอคอนเป็นสีแดงเมื่อ hover */
    }

    </style>
</head>
<body>

<div class="home">
<?php include 'home.php';?>
</div>

<header>
    <h>ยืมอุปกรณ์</h>
</header>

    <div class="container">
        <div class="left-panel">
            <form action="#" method="post">
                <label for="equipment">อุปกรณ์</label>
                <input type="text" id="equipment" name="equipment" required>

                <label for="quantity">จำนวน</label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="borrow-date">วันที่ยืม</label>
                <input type="date" id="borrow-date" name="borrow-date" required>

                <label for="return-date">กำหนดคืน</label>
                <input type="date" id="return-date" name="return-date" required>

                <button type="submit">เพิ่ม</button>
            </form>
        </div>
        
        <div class="right-panel">
            <table>    
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>อุปกรณ์</th>
                        <th>จำนวน</th>
                        <th>วันที่ยืม</th>
                        <th>กำหนดคืน</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
              
                <td><img src="assete/camera.jpg" alt="อุปกรณ์ที่ 2" style="max-width: 120px; max-height: 80px;"></td>
                <td>อุปกรณ์ที่ 2</td>
                <td>1</td>
                <td>20/02/2524</td>
                <td>25/02/2524</td>
                <td class="action-icons">
                    <i class="fas fa-trash-alt" title="ลบทิ้ง"></i>
                </td>

                
            </tr>
</tbody>

            </table>

            <div>
                <button class="confirm">ยืนยัน</button>
                <button class="cancel">ยกเลิก</button>
            </div>
        </div>
    </div>
</body>
</html>
