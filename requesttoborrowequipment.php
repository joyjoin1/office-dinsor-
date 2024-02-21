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
            background-color: #C4C4C4; /* ตั้งค่าพื้นหลัง*/
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
            background-color: #C4C4C4;
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

    button {
        background-color: #FF6600;
        color: #FFFFFF;
        border: none;
        border-radius: 40px;
        cursor: pointer;
        width: 60px;
        height: 40px;
        margin: auto;
        margin-top: -50px; /* ปรับค่าตามที่คุณต้องการ */
    }

    /* เพิ่ม input ประเภทวันที่สำหรับวันที่เริ่มต้น */
    input[type="date"]#startDate  {
        margin-left: 600px; /* ปรับค่าตามที่คุณต้องการ */
        margin-top: -45px; /* ปรับค่าตามที่คุณต้องการ */
    }
    /* เพิ่ม input ประเภทวันที่สำหรับวันที่สิ้นสุด */
    input[type="date"]#endDate {
        margin-left: 10px; /* ปรับค่าตามที่คุณต้องการ */
        margin-top: -45px; /* ปรับค่าตามที่คุณต้องการ */
    }   

    .date-inputs {
        display: flex;
    }

    .status {
    padding: 5px 10px;
    border-radius: 20px;
    text-align: center;
    display: inline-block;
    margin-top: 45px;
    width: 80px; /* ปรับขนาดความกว้างตามที่คุณต้องการ */
    height: 25px; /* ปรับขนาดความสูงตามที่คุณต้องการ */
    }

    .status[data-status="รออนุมัติ"] {
        background-color: #15C423; /* Green color for รออนุมัติ สีเขียว*/
        color: white;
    }

    .status[data-status="กำลังใช้งาน"] {
        background-color: #FAAE02; /* Orange-Yellow color for กำลังใช้งาน สีส้มเหลือง */
        color: white;
    }

    .status[data-status="เกินกำหนด"] {
        background-color: #FF0000; /* Orange-Yellow color for กำลังใช้งาน สีส้มเหลือง */
        color: white;
    }

    fieldset {
            position: relative;
           
        }

    legend {
            position: absolute;
    top: -70px;
    /* ทำให้ legend ใช้พื้นที่ตามข้อความภายในเท่านั้น */
    margin-right: -200px; /* ปรับตามต้องการ */
        }

        label[for="date"] {
    color: #888;
    font-size: 14px;
    margin-bottom: 5px;
    display: block;
    text-align: center; /* ทำให้ข้อความอยู่ตรงกลาง */
    position: relative; /* เพิ่ม position เพื่อให้สามารถใช้ top ได้ */
    top: -42px; /* ขยับขึ้นบน 5px */
}
    </style>
    
    <title>คำขอยืมอุปกรณ์</title>
</head>

<body>

<div class="home">
<?php include 'home.php';?>
</div>

    <header>
        <h>คำขอยืมอุปกรณ์</h>
    </header>

    <label for="date" style="color: #888;">เลือกวันที่เริ่มต้นและวันที่สิ้นสุด</label>
    <div class="search-bar">
        <div class="date-inputs">      
    <!-- เพิ่ม input ประเภทวันที่สำหรับวันที่เริ่มต้น -->
    <input type="date" id="startDate" name="startDate">
    <!-- เพิ่ม input ประเภทวันที่สำหรับวันที่สิ้นสุด -->
    <input type="date" id="endDate" name="endDate">
         </div>  

    </div>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>รูปภาพ</th>
                <th>ชื่อพนักงาน</th>
                <th>ชื่ออุปกรณ์</th>
                <th>จำนวน</th>
                <th>วันที่ยืม</th>
                <th>กำหนดคืน</th>
                <th>สถานะ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- ตำแหน่งนี้จะให้คุณเพิ่มข้อมูลในแต่ละแถวตามความเหมาะสม -->
            <tr>
                <td>1</td>
                <td><img src="assete/MacBook.jpg" alt="อุปกรณ์ที่ 1" style="max-width: 110px; max-height: 100px;"></td>
                <td>สมปอง</td>
                <td>โน้ตบุ๊ค</td>
                <td>1</td>
                <td>20/02/2567</td>
                <td>25/02/2567</td>

                <td class="status" data-status="กำลังใช้งาน">กำลังใช้งาน </td>
               <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">คืน</button>
            </div>
       
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td><img src="assete/camera.jpg" alt="อุปกรณ์ที่ 2" style="max-width: 120px; max-height: 80px;"></td>
                <td>ชูศักดิ์</td>
                <td>กล้อง</td>
                <td>1</td>
                <td>15/02/2567</td>
                <td>25/02/2567</td>
                <td class="status" data-status="รออนุมัติ">รออนุมัติ</td>
             <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">อนุมัติ</button>
            <button type="button" class="btn btn-primary">ปฏิเสธ</button>
        </div>
    </td>
            </tr>

            
            <tr>
                <td>3</td>
                <td><img src="assete/camera.jpg" alt="อุปกรณ์ที่ 2" style="max-width: 120px; max-height: 80px;"></td>
                <td>สมศรี</td>
                <td>กล้อง</td>
                <td>1</td>
                <td>15/02/2567</td>
                <td>17/02/2567</td>
                <td class="status" data-status="เกินกำหนด">เกินกำหนด</td>

    <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">คืน</button>
        </div>
    </td>
            </tr>
            <!-- เพิ่มแถวตามความเหมาะสม -->
        </tbody>
    </table>

</body>
</html>
