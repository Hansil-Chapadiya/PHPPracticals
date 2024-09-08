<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .container {
        font-size: 2vh;
        background-color: #FFFFFF;
        padding: 2vh;
    }

    table {
        margin: auto;
        border: 2px solid rgb(175, 235, 145);
        color: #0000FF;
        border-radius: 2%;
        padding: 2vh;
    }

    tr,
    td {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        border: 2px solid rgb(175, 235, 145);
        border-radius: 10%;
        padding: 2vh;
        font-size: 2vh;
    }

    input {
        background-color: transparent;
        border-color: #FFFFFF;
        color: #0000FF;
        font-size: 2vh;
    }

    input:focus{
        color: #0000FF;
        outline: 2px solid #0000FF;
    }

    input::placeholder {
        color: #000000;
    }

    .m {
        padding: 2vw;
    }

    .btn {
        background: gray;
        height: 5vh;
        width: 15vh;
        color: #FFFFFF;
    }

    .btn:hover {
        cursor: pointer;
        background-color: rgb(175, 235, 145);
    }
</style>

<body>
    <form id="form1" class="container" action="MH7(1).php" method="post">
        <table>
            <tr>
                <th colspan="2" class="m">
                    <h1>Student Registration Form</h1><br><hr>
                </th>
            </tr>
            <tr>
                <td>Seat_no:</td>
                <td><input type="number" name="seat_no" placeholder="Seat number"></td>
            </tr>
            <tr>
                <td>User_id:</td>
                <td><input type="number" name="user_id" placeholder="User_id number"></td>
            </tr>
            <tr>
                <td>Student Name:</td>
                <td><input type="text" name="lname" placeholder="Input Student_name"></td>
            </tr>
            <tr>
                <td>Father Name:</td>
                <td><input type="text" name="fname" placeholder="Input Father_name"></td>
            </tr>
            <tr>
                <td>Mother Name:</td>
                <td><input type="text" name="mname" placeholder="Input Mother_name"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="passwordField" placeholder="Input Password"></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="passwordFieldC" placeholder="Input Confirm Password"></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob" placeholder="Enter date"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="textarea" rows="2" cols="8"></textarea></td>
            </tr>
            <tr>
                <td>CheckBox:</td>
                <td><input type="checkbox" name="CheckBox[]" value="Science">Science<br>
                    <input type="checkbox" name="CheckBox[]" value="Maths">Maths<br>
                    <input type="checkbox" name="CheckBox[]" value="English">English
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="Radio" name="RadioButton1" value="Male">Male<br>
                    <input type="radio" name="RadioButton1" value="Female">Female<br>
                </td>
            </tr>
            <tr>
                <td>Select Catagory</td>
                <td><select name="dropdown">
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="SEBC">SEBC</option>
                        <option value="OPEN">OPEN</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="border:0px;"><input class="btn" type="submit" name="submit"></td>
                <td style="border:0px;"><input class="btn" type="reset" name="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>