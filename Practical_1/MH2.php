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
        echo "<table border='3' cellspacing='8' cellpadding='8'><tr><td><h1><style='font-family:'TimesNewRoman'';>Practical-2<br></h1></td></tr>";
        $n1 = 10;
        function FunctionName()
        {
            global $n1;
            $n2 = 14;
            static $n3 = 15;
            echo "<tr><td>Global Number-1 = ".$n1 ."</td></tr><br>";
            echo "<tr><td>Local Number-2 = ".$n2 ."</td></tr><br>";
            echo "<tr><td>Static Number-3 = ".$n3."</td></tr></table>";
        }
        FunctionName();
    ?>
</body>
</html>