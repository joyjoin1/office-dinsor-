<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addequipment</title>
    <style>
        /* สไตล์ CSS ที่เคยปรับแต่งไว้ */
                header {
            color: #000000;
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

        label {
            /* ตัวหนังสือ */
            display: inline-block;
            margin: px;
            width: 180px;/* กำหนดความกว้างของ label */
            color: #000000;/* ให้ หัวข้อ มีสีดำ */
            text-align: left;
            padding-left: 8px;
        }
        
        label::after {
            content: "";
            display: block;
            margin-top: 10px;
        }

        input {
            /* บล็อก */
            width: calc(280px);
            /* กำหนดความกว้างของ input ให้ครอบ label ด้วย margin */
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #D0D1D5;
            background-color: #D0D1D5;
            /* ให้พื้นหลังของ label เป็นสีดำ */
            border-radius: 40px;
            /* ทำให้มีมุมโค้ง */
            margin: 5px;
            /* ขยับไปทางบน-ล่าง และทางซ้าย-ขวา (auto) */
        }

        /* สไตล์ CSS เพิ่มเติมเพื่อแสดงภาพ */
        #imagePreviewContainer {
            max-width: 100%;
            margin-top: 10px;
            background-color: FFFFFF;
            padding: 1px;
        }

        /* เพิ่มสไตล์ให้ภาพที่แสดงใน container ปรับให้ภาพยังคงความสูงส่วนที่ต้องการ */
        #imagePreview img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            /* ให้ภาพเต็ม container และไม่ทำให้เกิดการเพิ่มขนาด */
        }

        /* ปุ่มบันทึก */
        #saveButton {
            background-color: #FF6600;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: -100px;
            /* เพิ่มระยะห่างของปุ่มจาก label */
            border-radius: 40px;
            /* ทำให้มีมุมโค้ง */
        }

        /* ปุ่มยกเลิก */
        #cancelButton {
            background-color: #FF6600;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 40px;
            /* ทำให้มีมุมโค้ง */
            cursor: pointer;
            margin-left: 10px;
            /* กำหนดระยะห่างจากปุ่มบันทึก */
            margin-top: -100px;
            /* เพิ่มระยะห่างของปุ่มจาก label */
        }

        form {
            width: 600px;/* ปรับความกว้างของฟอร์ม */
            height: 380px;
            margin: 80px auto 80px;/* ปรับมาร์จินด้านบน (50px) และด้านล่าง (80px) */
            padding : 20px;
            background-color: #FFFFFF;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
            border: 1px solid #FF6600;
            display: flex;/* ให้ฟอร์มเป็น flex container */
            flex-wrap: wrap;/* เพิ่ม flex-wrap เพื่อให้ข้อมูลของฟอร์มเรียงลงมาเมื่อหน้าจอเล็กลง */
            justify-content: space-between;/* จัดวางฟอร์มไปทางด้านซ้าย */
            align-items: flex-start;/* จัดวางฟอร์มไปทางด้านบน */
            box-shadow: 0 0 10px rgba(197, 199, 203, 0.5);/* เพิ่มเงาใน input */
            /* ทำให้ข้อความใน form อยู่ตรงกลาง */
            margin-top: -20px; /* ปรับค่านี้เพื่อขยับลงมา */
            
        }
    </style>
</head>

<body>

<div class="home">
<?php include 'home.php';?>
</div>

    <header>
        <h>เพิ่มอุปกรณ์</h>
    </header>

    <form action="process_add_equipment.php" method="post" enctype="multipart/form-data">
        <div style="flex: 1;">
            <!-- ให้ช่องกรอกข้อมูลอยู่ทางด้านซ้าย -->
            <label for="equipmentName">ชื่ออุปกรณ์</label>
            <input type="text" id="equipmentName" name="equipmentName" required>

            <label for="serialNumber">หมายเลขเครื่อง</label>
            <input type="text" id="serialNumber" name="serialNumber" required>

            <label for="equipmentType">ประเภท</label>
            <input type="text" id="equipmentType" name="equipmentType" required>

            <label for="quantity">จำนวนทั้งหมด</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>

        <div style="flex: 1; padding-left: 20px;">
            <!-- ให้ส่วนของการเพิ่มไฟล์รูปภาพอยู่ทางด้านขวา -->
            <label for="image">รูปภาพ</label>
            <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(this);" required>

            <!-- ส่วนแสดงภาพ -->
            <div id="imagePreviewContainer">
                <div id="imagePreview"></div>
            </div>
        </div>

        <div style="flex: 2; display: flex; justify-content: flex-end; align-items: flex-end; margin-top: 10px;">
            <!-- ปุ่มบันทึก -->
            <button id="saveButton" type="submit">บันทึก</button>

            <!-- ปุ่มยกเลิก -->
            <button id="cancelButton" type="button">ยกเลิก</button>
        </div>
    </form>

    <script>
        // ฟังก์ชันแสดงภาพตัวอย่าง
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
            preview.innerHTML = ''; // ล้างครั้งก่อนเพื่อแสดงภาพใหม่

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
