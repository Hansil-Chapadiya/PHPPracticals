<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="3">
<?php
    function sqr($n)
    {
        echo "<tr><td>SQUARE = ".$n*$n."</td></tr>";
    }

    function sqrT1($n)
    {
        return sqrt($n);
    }

    function cube($n=14)
    {
        return $n*$n*$n;
    }

    function var_length()
    {
        $n = func_num_args();
        $v = func_get_args();
        foreach($v as $val)
        {
            echo "<tr><td>$val</td></tr> ";
        }
    }

    echo "<tr><td><b>WITH ARGUMENTS:<br></b></td></tr>";
    sqr(10);

    $n1 = 14;
    echo "<tr><td><b><br>SQRT of $n1: <br></b>".sqrT1($n1)."</td></tr>";

    $n1 = 10;
    echo "<tr><td><b><br>Cube of $n1: <br></b>". cube($n1)."</td></tr>";
    
    echo "<tr><td><b>Variable Length</b></td></tr>";
    var_length("The","Great","Hansil","Chapadiya");


?>
</table>
</body>
</html>