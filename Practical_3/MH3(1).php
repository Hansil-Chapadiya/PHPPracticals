<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $pass = $_POST['passwordField'];
    $add = $_POST['textarea'];
    $game = " ";
    if (isset($_POST["submit"])) {
        if (!empty($_POST["CheckBox"])) {
            foreach ($_POST["CheckBox"] as $selected) {
                $game = $game . " ". $selected;
            }
        }
    }
    $fees = $_REQUEST['RadioButton1'];
    $lang = $_REQUEST['dropdown'];
    ?>
    <table  border="3" cellspacing="5" cellpadding="5" align="center">
    <tr>
        <th colspan="2">Form details:</th>
    </tr>
    <tr>
        <td>FirstName:</td>
        <td><?php echo $fname?></td>
    </tr>
    <tr>
        <td>MiddleName:</td>
        <td><?php echo $mname ?></td>
    </tr>
    <tr>
        <td>LastName:</td>
        <td><?php echo $lname ?></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><?php echo $pass ?></td>
    </tr>
    <tr>
        <td>Language:</td>
        <td><?php echo $lang ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo $add ?></td>
    </tr>
    <tr>
        <td>Game:</td>
        <td><?php echo $game ?></td>
    </tr>
    <tr>
        <td>Fees:</td>
        <td><?php echo $fees ?></td>
    </tr>
</table>
</body>

</html>