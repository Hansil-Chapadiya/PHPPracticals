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
        <?php
        $n = 11;
        $i;
        for ($i = 1; $i <= $n; $i++) { ?>
            <tr>
                <td><?php echo "$n * $i = " . $n * $i . "<br></td>";
                } ?>
            </tr>
    </table>
</body>

</html>