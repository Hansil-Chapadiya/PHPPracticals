<?php
    $m = $_GET["maths"]; 
    $p = $_GET["php"];
    $w = $_GET['wns'];
    $j = $_GET['java'];
    $a = $_GET['android'];
    $total = ($p + $m + $j + $w + $a)/5.0;

    function Grade($marks)
    {
        if (($marks >= 90) && ($marks <= 100)) {
            return "AA";
        }
        else if($marks > 80){
            return "AB";
        }
        else if($marks > 70)
        {
            return "BB";
        }
        else if($marks > 55)
        {
            return "CC";
        }
        else if($marks > 35)
        {
            return "DD";
        }
        else if($marks < 35)
        {
            return "FAIL";
        }
        else
        {
            return "Inavalid";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <td>Maths</td>
            <td><?php echo Grade($m); ?></td>
        </tr>
        <tr>
            <td>PHP</td>
            <td><?php echo Grade($p); ?></td>
        </tr>
        <tr>
            <td>WNS</td>
            <td><?php echo Grade($w); ?></td>
        </tr>
        <tr>
            <td>JAVA</td>
            <td><?php echo Grade($j); ?></td>
        </tr>
        <tr>
            <td>ANDROID</td>
            <td><?php echo Grade($a); ?></td>
        </tr>
        <tr>
            <td>SPI</td>
            <td><?php echo Grade($total); ?></td>
        </tr>
    </table>
</body>
</html>