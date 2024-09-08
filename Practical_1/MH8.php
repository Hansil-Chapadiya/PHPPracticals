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
        $n=5;
        echo "<b>USING FOR LOOP</b> <br>";

        for ($i=1; $i <= $n; $i++) { 
            echo "<i>$i</i><br>";
        }

        echo "<b>USING WHILE LOOP</b> <br>";

        $i=1;
        while ($i <= $n) {
            echo "<i>$i</i><br>";
            $i++;
        }

        echo "<b>USING DO-WHILE LOOP</b> <br>";

        $i=1;
        do {
            echo "<i>$i</i><br>";
            $i++;
        } while ($i <= $n);

        echo "<b>USING FOREACH LOOP</b> <br>";

        $arr = array("RED", "GREEN", "BLUE");

        foreach ($arr as $key => $value) {
            echo "<i>$key => ".$value ."</i><br>";
        }
    ?>
</body>
</html>