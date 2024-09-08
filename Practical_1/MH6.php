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
        <tr>
            <td>
                <?php
                $n1 = 0;
                $n2 = 1;
                echo "$n1";
                ?>
            </td></tr>
            <tr>
            <td>
                <?php
                echo "$n2";
                ?>
            </td></tr>
            <?php
            for ($i = 3; $i <= 10; $i++) {
                $n3 = $n1 + $n2; ?>
                <tr><td><?php echo $n3 . " "; ?></td></tr>
            <?php
                $n1 = $n2;
                $n2 = $n3;
            }
            ?>
    </table>
</body>

</html>