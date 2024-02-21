<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <style>
        body {
            font-family: 'prompt', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('img/BK.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        form {
            width: 300px;
            text-align: center;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
            width: 100%;
            font-weight: bold;
            padding: 5px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border-radius: 40px;
        }

        input[type="submit"] {
            background-color: #FF6600;
            color: #FFFFFF;
            cursor: pointer;
            transition: background-color 0.3s;
            border: none;
            padding: 10px 50px;
            border-radius: 60px;
        }

        img#login1 {
            width: 250px;
            height: 140px;
            border-radius: 50%;
            margin-right: 20px;
        }

        h2 {
            font-family: 'Segoe Print', cursive;
            margin-bottom: 2px;
        }

        #welcomeMessage {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: #FFFFFF;
    color: #000000;
    text-align: center;
    padding: 10px;
    font-size: 40px;
    line-height: 100vh; /* ให้ข้อความอยู่ตรงกลาง */
    display: none;
    font-family: 'Segoe Print', cursive;
    font-weight: bold; 
}

    </style>
</head>
<body>

<div id="welcomeMessage">Welcome to Dinsor Office</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        echo "กรุณากรอกข้อมูลทุกช่อง";
    } else {
        echo "<script>document.getElementById('welcomeMessage').style.display = 'block';</script>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="loginForm">
    <img id="login1" src="assete/login.png" alt="logodinsor">
    <h2 style="margin-bottom: 5px; color: #000000; font-size: 23px; font-weight: 900;">Welcome to Dinsor Office </h2>
    <h2 style="margin-bottom: 20px; color: #000000; font-size: 18px; font-weight: 500;">Login to your accout</h2>
    
    <label for="username"></label>
    <input type="text" name="username" placeholder="Username" required>
    
    <label for="password"></label>
    <input type="password" name="password" placeholder="Password" required>

    <input type="submit" value="Log In">
</form>

<script>
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // แสดงข้อความ Welcome ที่กำหนดเวลาค้างไว้ 2 วินาที
        document.getElementById('welcomeMessage').style.display = 'block';
        
        setTimeout(function () {
            // เมื่อค้างไว้ 2 วินาทีแล้ว ทำการเปลี่ยนที่อยู่ (redirect)
            window.location.href = 'dashboard.php';
        }, 2000);
    });
</script>

</body>
</html>
