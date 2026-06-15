<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมสูตรคูณแม่ม่วง</title>
    <style>
        /* ตั้งค่าฟอนต์และพื้นหลังระบบ */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif, 'Kanit';
            background-color: #f3e5f5; /* สีม่วงพาสเทลอ่อนๆ */
            color: #4a148c; /* สีม่วงเข้มสำหรับตัวอักษร */
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* กล่องข้อความหัวข้อหลัก */
        .header-box {
            background-color: #7b1fa2; /* สีม่วงเข้ม */
            color: white;
            padding: 15px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 20px;
        }
        .header-box h1 {
            margin: 0;
            font-size: 24px;
        }

        /* ลิงก์เมนู */
        .nav-link {
            display: inline-block;
            color: #9c27b0;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 20px;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #e040fb;
            text-decoration: underline;
        }

        /* ฟอร์มกรอกข้อมูล */
        form {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-sizing: border-box;
        }
        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 80%;
            padding: 10px;
            border: 2px solid #ce93d8;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            text-align: center;
            transition: border-color 0.3s;
        }
        input[type="number"]:focus {
            border-color: #9c27b0;
        }
        input[type="submit"] {
            background-color: #9c27b0;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 15px;
            width: 85%;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #7b1fa2;
        }

        /* กล่องแสดงผลลัพธ์สูตรคูณ */
        .result-box {
            background-color: white;
            margin-top: 25px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 400px;
            text-align: center;
            border-top: 5px solid #9c27b0;
            box-sizing: border-box;
        }
        .result-box h2 {
            margin-top: 0;
            color: #4a148c;
            border-bottom: 2px solid #f3e5f5;
            padding-bottom: 10px;
        }
        .multiplication-line {
            font-size: 18px;
            padding: 4px 0;
            color: #6a1b9a;
        }
        .multiplication-line:nth-child(even) {
            background-color: #f3e5f5; /* สลับสีบรรทัดให้อ่านง่าย */
            border-radius: 4px;
        }
    </style>
</head>
<body>
    
    <div class="header-box">
        <h1>W1-Areeyada pudpong BIT.2/3 No.45</h1>
    </div>

    <a href="while.php" class="nav-link">← ไปที่หน้า while.php</a>

    <form action="" method="GET">
        <label for="num">🔮 กรอกเลขแม่สูตรคูณ</label>
        <input type="number" name="num" id="num" required placeholder="เช่น 2, 5, 12">
        <br>
        <input type="submit" value="คำนวณสูตรคูณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = intval($_GET["num"]); // ปรับให้ปลอดภัยขึ้นด้วย intval

            echo "<div class='result-box'>";
            echo "<h2>✨ สูตรคูณแม่ ".$num." ✨</h2>";

            for($i = 1; $i <= 12; $i++){
                // ครอบด้วยคลาสเพื่อจัดความสวยงามและสลับสีบรรทัด
                echo "<div class='multiplication-line'>" . $num . " × " . $i . " = " . ($num * $i) . "</div>";
            }
            echo "</div>";
        }
    ?>
</body>
</html>