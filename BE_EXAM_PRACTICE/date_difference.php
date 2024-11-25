<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $date1 = new DateTime();
    $date2 = DateTime::createFromFormat("d/m/y", "14/12/20");

    // Check if the second date was parsed successfully
    if (!$date2) {
        die("Invalid date format. Please use 'd/m/y'.");
    }


    $datediff = $date1->diff($date2);
    $datedays = $datediff->days;

    if (intval(abs($datedays)) % 2 == 0) {
        echo "<body style='background:blue;'>Blue Background</body>";
    } else {
        echo "<body style='background:red;'>Red Background</body>";
    }

    ?>
</body>

</html>