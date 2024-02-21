<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์ม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ECA72C; /* เปลี่ยนสีพื้นหลังเป็นขาว */
            margin: 0;
            padding: 0;
        }

        form {
            margin-top: 30px;
            background-color: #f2f2f2; /* เปลี่ยนสีพื้นหลังของแบบฟอร์มเป็นสีเทา */
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* เพิ่มเงาเรืองแสง */
            padding: 20px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"],
        textarea,
        input[type="date"] {
            width: calc(100% - 18px); /* ปรับขนาดและรูปร่างของช่องกรอกข้อมูล */
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form method="get" action="HW01result.php">
        <table border="0" align="center" width="100%"> <!-- ลบเส้นขอบ -->
            <tr>
                <td colspan="2" align="center"><big>แบบฟอร์ม</big></td>
            </tr>
            <tr>
                <td>ชื่อจริง : </td>
                <td><input type="text" name="fName" size="20" value="" /> </td>
            </tr>
            <tr>
                <td>นามสกุล : </td>
                <td><input type="text" name="lName" size="20" value="" /></td>
            </tr>
            <tr>
                <td>เบอร์โทร : </td>
                <td><input type="text" name="pNum" size="20" minlength="9" maxlength="10" placeholder="Telephone Number" /></td>
            </tr>
            <tr>
                <td>วันเกิด : </td>
                <td><input type="date" name="birthday" required /></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="customerEmail" size="20" placeholder="E-mail"></td>
            </tr>
            <tr>
                <td>เพศ : </td>
                <td align="center">
                    <input type="radio" name="gender" value="ชาย">ชาย<br>
                    <input type="radio" name="gender" value="หญิง">หญิง<br>
                </td>
            </tr>
            <tr>
                <td align="center">ที่อยู่:</td>
                <td>
                <textarea type="text" name="customerAddress" cols="48" rows="4" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" ตกลง " />
                    <input type="reset" value=" ลบข้อมูล " /> <!-- เพิ่มข้อความของปุ่มลบข้อมูล -->
                </td>
            </tr>
        </table>
    </form>
</body>

</html>