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
       
        /* รหัสผ่าน */
        .container1  {
            background-color: #fff;
            border: 2px solid #FF6600;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 40px;
            max-width: 1050px; /* ปรับเพิ่มความกว้างสูงสุด */
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

button.save,
button.cancel {
    background-color: #FF6600;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 40px;
   
    margin-left: -100px; /* เพิ่ม margin-left ที่นี่ */
}


   /* เพิ่มพนักงาน */
.container.container2 {
    background-color: #fff;
    border: 2px solid #FF6600; /* ปรับสีขอบตามที่คุณต้องการ */
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 40px;
    max-width: 1150px; /* ปรับเพิ่มความกว้างสูงสุด */
    width: 80%; /* ปรับเพื่อให้ container ไม่เกิน 80% ของ viewport */
    margin: auto; /* ทำให้ container ตรงกลาง */
    padding: 20px;
    margin-right: 160px; 
}
/* กำหนดสไตล์สำหรับ <select> */
select {
    width: calc(280px); /* กำหนดความกว้างของ select */
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #D0D1D5;
    background-color: #D0D1D5; /* ให้พื้นหลังของ select เป็นสีดำ */
    border-radius: 40px; /* ทำให้มีมุมโค้ง */
    margin: 5px; /* ขยับไปทางบน-ล่าง และทางซ้าย-ขวา (auto) */
    appearance: none; /* ซ่อนปุ่ม dropdown ตั้งต้น */
    outline: none; /* ลบเส้นขอบเมื่อไฟล์รับมีการตั้งค่า */
    cursor: pointer; /* เปลี่ยนเป็นตัวชี้เมื่อเอามาแตะ */
}

/* กำหนดสไตล์สำหรับ option ของ select */
select option {
    background-color: #fff; /* ให้พื้นหลังของ option เป็นสีขาว */
    color: #000; /* ให้ข้อความของ option เป็นสีดำ */
}


 </style>

    <title>เพิ่มพนักงาน</title>

</head>
<body>
    
<div class="home">
<?php include 'home.php';?>
</div>

<header>

        <h>เพิ่มพนักงาน</h>
    </header>

    <div class="container container1">
    <form action="process.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">สุ่ม</button>
    </form>
</div>
<div class="container container2">
     
<form action="process_employee.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="profile_picture">รูปประจำตัว</label>
            <input type="file" name="profile_picture" id="profile_picture" accept="image/*" required>

        <class="form-group">
            <label for="first_name">ชื่อ</label>
            <input type="text" name="first_name" id="first_name" required>
        

        <class="form-group">
            <label for="last_name">นามสกุล</label>
            <input type="text" name="last_name" id="last_name" required>
    </div>

            <div label for="nickname">ชื่อเล่น</label>
            <input type="text" name="nickname" id="nickname" required>

            <label for="gender">เพศ</label>
            <select name="gender" id="gender" required>
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
            </select>

            <label for="equipmentType">เลือกผู้เกี่ยวข้อง</label>
            <select id="equipmentType" name="equipmentType" required>
                <option value="option1">AE</option>
                <option value="option2">Developer</option>
                <option value="option3">Graphic Designer</option>
                <option value="option4">Editor</option>
                <option value="option5">Production</option>
            </select>
        </div>

            <div label for="position">ตำแหน่ง</label>
            <input type="text" name="position" id="position" required>

            <label for="birthdate">วันเกิด</label>
            <input type="date" name="birthdate" id="birthdate" required>

            <label for="contact_number">เบอร์ติดต่อ</label>
            <input type="tel" name="contact_number" id="contact_number" required>
        </div>

            <div label for="email">อีเมล</label>
            <input type="email" name="email" id="email" required>

            <label for="role">บทบาท:</label>
            <select name="role" id="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            </div>

            <button type="save">บันทึก</button>
            <button type="cancel">ยกเลิก</button>
        </form>
    </div>


</body>
</html>
