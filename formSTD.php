<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
            opacity: 0.9;
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
    <center>
    <form action="formSTDcal.php" method="get">
        <table width ="30%" border="1">
            <td colspan="2" style="background-color:#4CAF50"><center><font size ="5">แบบฟอร์มนักศึกษา</font></center></td>
            <tr>
                <td>Name :</td>
                <td><input type="text" size="58" name="name"></td>
            </tr>
            <tr>
                <td>Sername :</td>
                <td><input type="text" size="58" name="sername"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" size="58" name="email" placeholder="Email"></td>
            </tr>
            <tr>
                <td>Phone :</td>
                <td><input type="text" size="58" name="phone" placeholder="Phone" minlength="9" maxlength="10"></td>
            </tr>
            <tr>
                <td>วันเกิด</td>
                    <td><form action="/action_page.php">
                        <input type="date" id="birthday" name="birthday">
                    </form></td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td>
                    <select name="gender">
                        <option value="">Select...</option>
                        <option value="male">Male</option>
                        <option value="female">female</option>
                        <option value="other">other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Address :</td>
                <td colspan="2">
                    <textarea name="address" cols="55" rows="5" required></textarea>
                    <br><br>
                </td>
            </tr>
            <tr>
                
                <td colspan="2" align ="center">
                    <input name="btnSubmit" type="submit" value="OK">
                    <input name="btnReset" type="reset" value="Clear">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>