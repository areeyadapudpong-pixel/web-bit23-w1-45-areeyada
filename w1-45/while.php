<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมสูตรคูณ (While Loop)</title>
    <style>
        /* คุมโทนพื้นหลังสีเทาอ่อน สบายตา ไม่ม่วงตะโกน */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif, 'Kanit';
            background-color: #f8f9fa; 
            color: #333333; 
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* หัวข้อชื่อนักศึกษา */
        .student-header {
            color: #6a1b9a; /* สีม่วงเข้มสวยๆ */
            margin: 0 0 10px 0;
            font-size: 24px;
            text-align: center;
        }

        /* ลิงก์กลับหน้าแรก */
        .nav-link {
            display: inline-block;
            color: #8e24aa;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 30px;
            transition: color 0.2s;
        }
        .nav-link:hover {
            color: #d81b60;
            text-decoration: underline;
        }

        /* ฟอร์มกรอกข้อมูลสไตล์คลีน */
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 360px;
            text-align: center;
            box-sizing: border-box;
            border: 1px solid #e0e0e0;
        }
        
        form label {
            font-size: 16px;
            font-weight: 600;
            display: block;
            margin-bottom: 12px;
            color: #495057;
        }

        /* ช่องกรอกตัวเลขตัดขอบม่วงพาสเทล */
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #e1bee7; 
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            text-align: center;
            box-sizing: border-box;
            transition: all 0.3s;
        }
        input[type="number"]:focus {
            border-color: #8e24aa;
            box-shadow: 0 0 8px rgba(142, 36, 170, 0.2);
        }

        /* ปุ่มคำนวณสีม่วงเด่น */
        input[type="submit"] {
            background-color: #8e24aa;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 15px;
            width: 100%;
            transition: background-color 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #7b1fa2;
        }

        /* กล่องแสดงผลลัพธ์สูตรคูณ */
        .result-box {
            background-color: #ffffff;
            margin-top: 25px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 360px;
            text-align: center;
            border-top: 6px solid #8e24aa; /* แถบสีม่วงด้านบน */
            box-sizing: border-box;
            border-left: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }
        .result-box h2 {
            margin: 0 0 20px 0;
            color: #4a148c;
            font-size: 20px;
        }

        /* บรรทัดสูตรคูณและแถบสีสลับบรรทัดให้อ่านง่าย */
        .multiplication-line {
            font-size: 16px;
            padding: 6px 0;
            color: #495057;
            font-weight: 500;
        }
        .multiplication-line:nth-child(even) {
            background-color: #f3e5f5; /* สีม่วงอ่อนมากๆ สลับบรรทัด */
            border-radius: 6px;
        }
    </style>
</head>
<body>
    
    <!-- ปรับหัวข้อให้อยู่ในคลาสสไตล์มินิมอลสีม่วง -->
    <h1 class="student-header">W1-Areeyada pudpong BIT.2/3 No.45</h1>

    <!-- ปรับแต่งลิงก์กลับหน้าแรก -->
    <a href="index.php" class="nav-link">← กลับไปหน้า index.php</a>

    <!-- ฟอร์มกรอกเลข -->
    <form action="" method="GET">
        <label for="num">🔢 กรอกเลขแม่สูตรคูณ (While)</label>
        <input type="number" name="num" id="num" required placeholder="กรอกตัวเลขตรงนี้">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = intval($_GET["num"]);

            echo "<div class='result-box'>";
            echo "<h2>สูตรคูณแม่ ".$num."</h2>";
            
            $i = 1; // เริ่มต้นที่ 1
            while($i <= 12) {
                echo "<div class='multiplication-line'>" . $num . " × " . $i . " = " . ($num * $i) . "</div>";
                $i++; // เพิ่มค่าทีหลังเพื่อให้ออกมาเป็น 1 ถึง 12 พอดีครับ
            }
            echo "</div>";
        }
    ?>
</body>
</html>