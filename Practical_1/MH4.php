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
        echo "Fibbonaci Series<br><br>";
        $n1=0;
        $n2=1;
        $n3;
        echo "0 1 ";
        for ($i=3; $i <= 10 ; $i++) { 
            $n3 = $n1 + $n2;
            echo $n3." ";
            $n1 = $n2;
            $n2 = $n3;
        }
    ?>
</body>
</html>