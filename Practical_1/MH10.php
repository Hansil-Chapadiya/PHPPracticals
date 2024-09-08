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
    echo "Before Call : " . $n1."<br>";
    function sqrCallByVal($n)
    {
        $n *= $n;
    }
    sqrCallByVal($n1);
    echo "Call By Value: " . $n1."<br>";


    echo "Before Call : " . $n1."<br>";
    function sqrCallByRef(&$n)
    {
        $n *= $n;
    }
    sqrCallByRef($n1);
    echo "Call By Reference: " . $n1."<br>";



    ?>
</body>

</html>