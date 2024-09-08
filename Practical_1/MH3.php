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
        $n1 = 10;
        $n2 = 14;
        echo "<table style='padding:0px;'><tr>";
        echo "<td><table border='3' cellspacing='8' cellpadding='8'><tr><td><h2>Arithmetic Operator</h2></td></tr>";

        echo "<tr><td><b>Addition : </b>";
        echo "<tr><td><br> 10 + 14 = ".($n1 + $n2). "</td></tr>";

        echo "<tr><td><b>Subtraction : </b></td></tr>";
        echo "<tr><td><br> 10 - 14 = ".($n1 - $n2). "</td></tr>";

        echo "<tr><td><b>Multiplication : </b></td></tr>";
        echo "<tr><td><br> 10 * 14 = ".($n1 * $n2). "</td></tr>";

        echo "<tr><td><b>Division: </b></td></tr>";
        echo "<tr><td><br> 10 / 14 = ".($n1 / $n2). "</td></tr>";

        echo "<tr><td><b>Modulus: </b></td></tr>";
        echo "<tr><td><br> 10 % 14 = ".($n1 % $n2). "</td></tr>";

        echo "<tr><td><b>Exponentiation: </b></td></tr>";
        echo "<tr><td><br> 10 ^ 14 = ".($n1 ** $n2). "</td></tr></table></td>";


        echo "<td><table border='3' cellspacing='8' cellpadding='8'><tr><td><h2>Comparison Operator</h2></td></tr>";

        echo "<tr><td><b>Equals : </b></td></tr>";
        echo "<tr><td>14 == 14 = ". (14 == 14). "</td></tr>";

        echo "<tr><td><b>Identical : </b></td></tr>";
        echo "<tr><td>10 === 10 = ".($n1 === 10). "</td></tr>";

        echo "<tr><td><b>Not Equals : </b></td></tr>";
        echo "<tr><td> 10 != 14 = ".($n1 != $n2). "<br>";
        echo "<tr><td> 10 <> 14 = ".($n1 <> $n2). "</td></tr>";

        echo "<tr><td><b>Not Identical : </b></td></tr>";
        echo "<tr><td> 10 !== 10 = ".($n1 !== 14 ). "</td></tr>";

        echo "<tr><td><b>Greater than : </b></td></tr>";
        echo "<tr><td> 10 > 14 = ".(10 > 14). "</td></tr>";

        echo "<tr><td><b>Less than : </b></td></tr>";
        echo "<tr><td> 10 < 14 = ".(10 < 14). "</td></tr>";

        echo "<tr><td><b>Greater than Equals : </b></td></tr>";
        echo "<tr><td> 10 >= 14 = ".(10 >= 14). "</td></tr>";

        echo "<tr><td><b>Less than Equals : </b></td></tr>";
        echo "<tr><td> 10 <= 14 = ".(10 <= 14). "</td></tr></table></td>";

        echo "<td><table border='3' cellspacing='8' cellpadding='8'><tr><td><h1>Logical Operator</h1></td></tr>";

        echo "<tr><td><b>AND : </b></td></tr>";
        echo "<tr><td> 10<14 AND 14 = ".(($n1<$n2) AND ($n2)). "<br></td></tr>";
        echo "<tr><td> 10<14 && 14 = ".(($n1<$n2) && 14). "</td></tr>";

        echo "<tr><td><b>OR : </b></td></tr>";
        echo "<tr><td> 10>14 OR 14 = ".(($n1<$n2) OR ($n2)). "</td></tr>";
        echo "<tr><td> 10<14 || 14 = ".(($n1<$n2) || 14). "</td></tr>";

        echo "<tr><td><b>NOT : </b></td></tr>";
        echo "<tr><td> 10 NOT 14 = ".!($n1 == $n2). "</td></tr>";

        echo "<tr><td><b>X-OR : </b></td></tr>";
        echo "<tr><td> 10 xor 14 = ".($n1 xor 10). "</td></tr></table><br></td></tr></table>";

    ?>
</body>
</html>