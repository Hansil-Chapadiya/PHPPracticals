<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
        Enter Rows : <input type="number" value="500" name="row"><br>
        Enter Column : <input type="number" value="3" name="column"><br>
        <table border="3" cellspacing="3" cellpadding="3" align="center">
            <tr>
                <th>column-1</th>
                <th>column-2</th>
                <th>column-3</th>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $row = $_POST['row'];
                $column = $_POST['column'];
                for ($i = 0; $i < $row; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $column; $j++) {
                        echo "<td>($i,$j)</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>