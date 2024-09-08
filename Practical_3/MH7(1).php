<?php
    $fname = $_REQUEST['fname'];
    $mname = $_REQUEST['mname'];
    $sname = $_REQUEST['lname'];
    $pass = $_REQUEST['passwordField'];
    $passc = $_REQUEST['passwordFieldC'];
    $add = $_REQUEST['textarea'];
    $dob = $_REQUEST['dob'];
    $seat = $_REQUEST['seat_no'];
    $id = $_REQUEST['user_id'];
    $game = " ";
    if (isset($_POST["submit"])) {
        if (!empty($_POST["CheckBox"])) {
            foreach ($_POST["CheckBox"] as $selected) {
                $game = $game . " ". $selected;
            }
        }
    }
    $gen = $_REQUEST['RadioButton1'];
    $lang = $_REQUEST['dropdown'];
?>
<table align="center" cellspacing="5" cellpadding="5" border="3">
    <tr>
        <th colspan="2">Form details:</th>
    </tr>
    <tr>
        <td>User_id:</td>
        <td><?php echo $id; ?></td>
    </tr>
    <tr>
        <td>Seat_no:</td>
        <td><?php echo $seat ?></td>
    </tr>
    <tr>
        <td>Student Name:</td>
        <td><?php echo $sname ?></td>
    </tr>
    <tr>
        <td>Father Name:</td>
        <td><?php echo $fname ?></td>
    </tr>
    <tr>
        <td>Mother Name:</td>
        <td><?php echo $mname ?></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><?php echo $pass ?></td>
    </tr>
    <tr>
        <td>Catagory:</td>
        <td><?php echo $lang ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo $add ?></td>
    </tr>
    <tr>
        <td>Subjects:</td>
        <td><?php echo $game ?></td>
    </tr>
    <tr>
        <td>Birth date:</td>
        <td><?php echo $dob ?></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><?php echo $gen ?></td>
    </tr>
</table>

</html>