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
        background-color: rgba(7, 89, 48, 0.815);
        padding: 2vh;
    }

    table {
        margin: auto;
        border: 2px solid rgb(175, 235, 145);
        color: aliceblue;
        border-radius: 0%;
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
        background-color: rgb(108, 139, 94);
        color: #120028;
        font-size: 2vh;
    }

    input::placeholder {
        color: #191825;
    }

    .m {
        padding-left: 3vw;
    }

    .btn {
        background: transparent;
        height: 5vh;
        width: 15vh;
        color: aliceblue;
    }

    .btn:hover {
        cursor: pointer;
        background-color: black;
    }
</style>

<body>
    <form id="form1" class="container" action="MH2(1).php" method="get">
        <table>
            <tr>
                <th colspan="2" class="m">
                    <h1>Registration Form</h1>
                </th>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" placeholder="Input First_name"></td>
            </tr>
            <tr>
                <td>Middle Name:</td>
                <td><input type="text" name="mname" placeholder="Input Middle_name"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" placeholder="Input Last_name"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="passwordField" placeholder="Input Password"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="textarea" rows="2" cols="8"></textarea></td>
            </tr>
            <tr>
                <td>CheckBox:</td>
                <td><input type="checkbox" name="CheckBox[]" value="Cricket">Cricket<br>
                    <input type="checkbox" name="CheckBox[]" value="Chess">Chess<br>
                    <input type="checkbox" name="CheckBox[]" value="Ludo">Ludo
                </td>
            </tr>
            <tr>
                <td>Fees:</td>
                <td><input type="Radio" name="RadioButton1" value="taken">Paid<br>
                    <input type="radio" name="RadioButton1" value="nottaken">Not Paid<br>
                    <input type="radio" name="RadioButton1" value="below18">TFW
                </td>
            </tr>
            <tr>
                <td>Select Language</td>
                <td><select name="dropdown">
                        <option value="Python">Python</option>
                        <option value="C/C++">C/C++</option>
                        <option value="C#">C#</option>
                        <option value="PHP">PHP</option>
                        <option value="JAVA">JAVA</option>
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