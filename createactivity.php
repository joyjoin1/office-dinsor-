<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createactivity</title>
    <style>
        /* สไตล์ CSS ที่เคยปรับแต่งไว้ */
        header {
            color: #000000;
            padding: 30px;
            text-align: center;
            font-size: 22px;
            margin-bottom: 30px;
            margin-top: 100px;
            font-weight: normal;
        }

        body {
            font-family: 'Prompt', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
        }

          .left-label {
        /* เพิ่ม CSS ตามต้องการ */
            display: inline-block;
            margin-bottom: 1px;
             align-items: center;
            width: 180px;
            color: #000000;
            text-align: left;
            padding-right: 90px;
}

        .right-label {
            /* เพิ่ม CSS ตามต้องการ */
            display: inline-block;
            margin-bottom: -1px;
            width: 180px;
            color: #000000;
            text-align: left;
            padding-left: 8px;
        }

        label::after {
            content: "\00a0";
            display: block;
            margin-top: 1px;
        }

        input {
            width: calc(280px);
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #FFD4B7;
            background-color: #FFD4B7;
            border-radius: 40px;
            margin: 1px;
        }


        /* ปุ่มบันทึก */
        #saveButton {
            background-color: #FF6600;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 40px;
            margin-top: -150px;
        }

        #cancelButton {
    background-color: #FF6600;
    color: #FFFFFF;
    padding: 10px 20px;
    border: none;
    border-radius: 40px;
    cursor: pointer;
    margin-left: 10px; /* ปรับตำแหน่งซ้ายที่นี่ */
    margin-top: -150px;
} 

        form {
            width: 600px;
            height: 380px;
            margin: 80px auto 80px;
            padding: 20px;
            background-color: #FFFFFF;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
            border: 1px solid #FF6600;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            box-shadow: 0 0 10px rgba(197, 199, 203, 0.5);
            text-align: center;
            margin-top: -20px;
        }

        /* เพิ่มสไตล์ให้ label อยู่ทางขวา */
        form label {
            text-align: right;
            padding-right: 10px;
            flex: 1; /* ปรับ flex เพื่อให้ label ไม่มีขนาดคงที่ */
        }

        /* เพิ่มสไตล์ให้ input อยู่ทางซ้าย */
        form input {
            flex: 2; /* ปรับ flex เพื่อให้ input ไม่มีขนาดคงที่ */
        }
        /* ตัวอย่างการปรับแต่งลักษณะของ dropdown */

select {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

#equipmentType {
    width: calc(280px);
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #FFD4B7;
    background-color: #FFD4B7;
    border-radius: 40px;
    margin: 5px;
    font-size: 13px; 
}

    </style>
</head>

<body>

<div class="home">
<?php include 'home.php';?>
</div>

    <header>
        <h>สร้างกิจกรรม</h>
    </header>

    <form action="process_add_equipment.php" method="post" enctype="multipart/form-data">
        <div style="flex: 1;">
        <label class="left-label" for="equipmentName">ชื่อกิจกรรม</label>
            <input type="text" id="equipmentName" name="equipmentName" required>

            <label class="left-label" for="serialNumber">สถานที่</label>
            <input type="text" id="serialNumber" name="serialNumber" required>

            <label class="left-label" for="equipmentType">ผู้เกี่ยวข้อง</label>
            <select id="equipmentType" name="equipmentType" required>
    <option value="option1">AE</option>
    <option value="option2">Developer</option>
    <option value="option3">Graphic Designer</option>
    <option value="option4">Editor</option>
    <option value="option5">Production</option>
</select>


            <label class="left-label" for="quantity">รายละเอียด</label>
            <input type="text" id="quantity" name="quantity" required>
        </div>

        <!-- ช่องกรอก "วันที่เริ่มต้น" และ "วันที่สิ้นสุด" อยู่ทางขวา -->
        <div style="flex: 1; display: flex; flex-direction: column; align-items: flex-start;">
            <label class="right-label" for="startDate">วันที่เริ่มต้น</label>
            <input type="date" id="startDate" name="startDate">

            <label class="right-label" for="endDate">วันที่สิ้นสุด</label>
            <input type="date" id="endDate" name="endDate">
        </div>

        <div style="flex: 2; display: flex; justify-content: flex-end; align-items: flex-end; margin-top: 10px;">
            <button id="saveButton" type="submit">บันทึก</button>
            <button id="cancelButton" type="button">ยกเลิก</button>
        </div>
    </form>

    <script>
        // ฟังก์ชันแสดงภาพตัวอย่าง
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
            preview.innerHTML = '';

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.setAttribute('src', e.target.result);
                    img.setAttribute('style', 'max-width: 100%;');
                    preview.appendChild(img);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
