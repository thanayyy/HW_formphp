<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์ม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ECA72C;
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
            text-decoration: none;
            font-weight: bold; /* เพิ่มเส้นขอบสีเขียว */
            padding: 10px 20px; /* ปรับขนาดของปุ่ม */ /* เพิ่มการเปลี่ยนสีเบาะแสต์เมื่อ hover */
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
        $email = $_GET['customerEmail'];
        
        $pNum = $_GET['pNum'];
        $birthday = $_GET['birthday'];
        $address = $_GET['customerAddress'];
                // คำนวณอายุ
        $currentDate = date("Y-m-d");
        $age = date_diff(date_create($birthday), date_create($currentDate))->y;

        if(empty(trim($fName)) || empty(trim($lName)) || empty(trim($email)) || empty(trim($pNum)) || empty(trim($gender)) || empty(trim($address))){
            echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน');history.back()</script>";
            exit();
        }
        else if(!preg_match("/^[ก-ฯะ-์a-zA-Z]+$/", $fName)){
            echo "<script>alert('Not use some character');history.back();</script>";
            exit();
        }
        else if(!filter_var(trim($email),FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('$email is not a valid email address');history.back();</script>";
            exit();
        }
        else if(!ctype_digit(trim($pNum))){
            echo "<script>alert('กรุณกรอกหมายเลขโทรศัพท์ให้ถุกต้อง');history.back();</script>";
            exit();
        }

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "university";
        $connectSQL = mysqli_connect($hostname,$username,$password);
        if (!$connectSQL)
            die("ไม่สามารถติดต่อกับ mySQL ได้");
        
        mysqli_select_db($connectSQL, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล university ได้");

        mysqli_query($connectSQL,"set character_set_connection=utf8mb4");
        mysqli_query($connectSQL,"set character_set_client=utf8mb4");
        mysqli_query($connectSQL,"set character_set_results=utf8mb4");

        // $sql = "insert into form(Name, Lastname, Email, Phone, Birthdate, Gender, Address) values ('$fName', '$lName', '$email', '$pNum', '$age', '$gender', '$address')";
        // $result = mysqli_query($connectSQL, $sql) or die("insert ลงตาราง form มีข้อผิดพลาดเกินขึ้น".mysqli_error());
        echo '<center>';
        echo '<center><br><br><h2><b><font color="white" size="6">บันทึกข้อมูลลูกค้าชื่อ '.$fName.' เรียบร้อย</font></b></h2>';
        echo '</center>';
        $sql1 = "select * from form";
        $Read =  mysqli_query($connectSQL, $sql1);
        while($rs = mysql_fetch_array($Read)){
           
            echo "<table align='center' width='50%'>";
            echo "<tr><td colspan='2' align='center'><h2>แบบฟอร์ม</h2></td></tr>";
            echo "<tr><td>ชื่อจริง :</td><td align='center'> <i> . $rs[0] . </i></td></tr>";
            echo "<tr><td>นามสกุล :</td><td align='center'> <i>$lName</i></td></tr>";
            echo "<tr><td>เบอร์โทร:</td><td align='center'> <i>$pNum</i></td></tr>";
            echo "<tr><td>E-mail:</td><td align='center'> <i>$email</i></td></tr>";
            echo "<tr><td>วันเกิด :</td><td align='center'> <i>$birthday</i></td></tr>";
            echo "<tr><td>อายุ :</td><td align='center'> <i>$age ปี</i></td></tr>";
            echo "<tr><td>เพศ :</td><td align='center'> <i>$gender</i></td></tr>";
            echo "<tr><td>ที่อยู่:</td><td align='center'> <i>$address</i></td></tr>";
            echo "</table>";
        }
            mysqli_close($connectSQL);
            ?>
    <center><a href="form.php">กลับ</a></center>
</body>

</html>
