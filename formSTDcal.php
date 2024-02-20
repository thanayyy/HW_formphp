<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormCal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background-computer.jpg') center center fixed;
            background-size: cover;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            opacity: 0.9; /* Adjust opacity as needed */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 0px;
            margin-bottom: 0px;
            resize: vertical;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        $name = $_GET['name'];
        $sername = $_GET['sername'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $birthday = $_GET['birthday'];
        $gender = $_GET['gender'];
        $address = $_GET['address'];
        
        $birthdate = new DateTime($birthday);
        $currentDate = new DateTime();
        $age = $birthdate->diff($currentDate)->y;

        if(empty(trim($name)) || empty(trim($sername)) || empty(trim($email)) || empty(trim($phone)) || empty(trim($gender)) || empty(trim($address))){
            echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน');history.back()</script>";
            exit();
        }
        else if(!preg_match("/^[ก-ฯะ-์a-zA-Z]+$/", $name)){
            echo "<script>alert('Not use some character');history.back();</script>";
            exit();
        }
        else if(!filter_var(trim($email),FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('$email is not a valid email address');history.back();</script>";
            exit();
        }
        else if(!ctype_digit(trim($phone))){
            echo "<script>alert('กรุณกรอกหมายเลขโทรศัพท์ให้ถุกต้อง');history.back();</script>";
            exit();
        }

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "university";
        $conn = mysqli_connect($hostname, $username, $password);
        if (!$conn)
            die("ไม่สามารถติดต่อกับ MySQL ได้");
        mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล university ได้");
        mysqli_query($conn,"set character_set_connection=utf8mb4");
        mysqli_query($conn,"set character_set_client=utf8mb4");
        mysqli_query($conn,"set character_set_results=utf8mb4");

        $sql = "insert into form(Name, Sername, Email, Phone, Birthdate, Gender, Address) values ('$name', '$sername', '$email', '$phone', '$birthday', '$gender', '$address')";
        mysqli_query($conn, $sql) or die("insert ลงตาราง form มีข้อผิดพลาดเกินขึ้น".mysqli_error($conn));
        echo '<center>';
        echo '<center><br><br><h2><b><font color="white" size="6">บันทึกข้อมูลลูกค้าชื่อ '.$name.' เรียบร้อย</font></b></h2>';
        echo '</center>';

            echo "<table width='30%' align='center' border='1'";
            echo "<tr><td colspan='2' align='center' style='background-color:#4CAF50'><font size='5'>แบบฟอร์มนักศึกษา</font></td></tr>";
            echo "<tr><td>Name</td><td>$name</td></tr>";
            echo "<tr><td>Sername</td><td>$sername</td></tr>";
            echo "<tr><td>วันเกิด</td><td>$birthday (อายุ: $age ปี)</td></tr>";
            echo "<tr><td>Email</td><td>$email</td></tr>";
            echo "<tr><td>Email</td><td>$phone</td></tr>";
            echo "<tr><td>Gender</td><td>$gender</td></tr>";
            echo "<tr><td>Address</td><td>$address</td></tr>";
            echo "<tr><td colspan='2' align ='center'><a href='http://localhost/6506021621021/formSTD.php' style='text-decoration:none'><input type ='submit' value='Back'></a></td></tr>";
            echo "</table>";
    ?>
</body>
</html>