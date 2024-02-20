<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์ม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #808080;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        table {
            margin-top: 30px;
            background-color: #f2f2f2; /* เปลี่ยนสีพื้นหลังของตารางเป็นสีเทาอ่อน */
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            color: #333366;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #ddd; /* เปลี่ยนสีพื้นหลังของหัวข้อในตารางเป็นสีเทาอ่อน */
        }

        a {
            display: inline-block; /* เปลี่ยนเป็น inline-block เพื่อให้ลิงก์อยู่ในบรรทัดเดียวกันกับข้อความ */
            margin-top: 20px;
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #4caf50; /* เพิ่มเส้นขอบสีเขียว */
            padding: 10px 20px; /* ปรับขนาดของปุ่ม */
            transition: all 0.3s ease; /* เพิ่มการเปลี่ยนสีเบาะแสต์เมื่อ hover */
        }

        a:hover {
            background-color: #4caf50; /* เปลี่ยนสีพื้นหลังเป็นสีเขียวเมื่อ hover */
            color: #fff; /* เปลี่ยนสีข้อความเป็นสีขาวเมื่อ hover */
        }
    </style>
</head>

<body>
    <?php
        $fName = $_GET['fName'];
        $lName = $_GET['lName'];
        $gender = $_GET['gender'];
        $religion = $_GET['religion'];
        $address = $_GET['address'];
        $pNum = $_GET['pNum'];
        $lWork = $_GET['lWork'];
        $birthday = $_GET['birthday'];

        // คำนวณอายุ
        $currentDate = date("Y-m-d");
        $age = date_diff(date_create($birthday), date_create($currentDate))->y;

        echo "<table align='center' width='50%'>";
        echo "<tr><td colspan='2' align='center'><h2>แบบฟอร์ม</h2></td></tr>";
        echo "<tr><td>ชื่อจริง :</td><td align='center'> <i>$fName</i></td></tr>";
        echo "<tr><td>นามสกุล :</td><td align='center'> <i>$lName</i></td></tr>";
        echo "<tr><td>เบอร์โทร:</td><td align='center'> <i>$pNum</i></td></tr>";
        echo "<tr><td>วันเกิด :</td><td align='center'> <i>$birthday</i></td></tr>";
        echo "<tr><td>อายุ :</td><td align='center'> <i>$age ปี</i></td></tr>";
        echo "<tr><td>งานอดิเรก :</td><td align='center'> <i>$lWork</i></td></tr>";
        echo "<tr><td>เพศ :</td><td align='center'> <i>$gender</i></td></tr>";
        echo "<tr><td>ศาสนา :</td><td align='center'> <i>$religion</i></td></tr>";
        echo "<tr><td>ที่อยู่:</td><td align='center'> <i>$address</i></td></tr>";
        echo "</table>"
    ?>
    <center><a href="HW01.php">กลับ</a></center>
</body>

</html>
