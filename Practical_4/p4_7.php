<html>

<head>
    <title>die() function</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <form action="p4_7.php" method="post">
        <div align="center">
            <h1>die() Function</h1>
            <hr>
            <h4>Enter Numbers</h4>
            <input class="txt form-control w-25 mt-3" style="border:2px solid black" type="number" name="num1" value="<?= $_POST["num1"] ?? "" ?>" placeholder="Enter Dividend">
            <input class="txt form-control w-25 mt-3" style="border:2px solid black" type="number" name="num2" value="<?= $_POST["num2"] ?? "" ?>" placeholder="Enter Divisor">
            <input class="btn btn-primary mt-3" type="submit" name="b1" value="Submit">
    </form>
    <br><br>
    <label><?php if (isset($_POST['b1'])) {
                $a = $_POST['num1'];
                $b = $_POST['num2'];
                if ($b == 0) {
                    die("Error : Divided by Zero");
                } else echo "Division = " . $a / $b;
            } else echo ""; ?>
    </label>
    </div>
</body>

</html>