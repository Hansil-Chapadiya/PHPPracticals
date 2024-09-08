<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Enter Number 1:</label>
        <input type="number" name="num1"><br>
        <label>Enter Number 1:</label>
        <input type="number" name="num2"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    // if (isset($_POST['submit'])) {
    //     $num1 = $_REQUEST['num1'];
    //     $num2 = $_REQUEST['num2'];
    //     $resA = $num1 + $num2;
    //     $resS = $num1 - $num2;
    //     $resM = $num1 * $num2;
    //     $resD = $num1 / $num2;
    //     echo "<label>Addition: $resA </label><br>
    //     <label>Subtraction: $resS </label><br>
    //     <label>Multiplication: $resM </label><br>
    //     <label>Division: $resD  </label>";
    // }
    ?>

</body>

</html> -->

<!DOCTYPE html>

<head>
    <title>Simple Calculator Program in PHP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>

<?php
if (isset($_POST['operator'])) {
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result = '';
    if (is_numeric($first_num) && is_numeric($second_num)) {
        switch ($operator) {
            case "+":
                $result = $first_num + $second_num;
                break;
            case "-":
                $result = $first_num - $second_num;
                break;
            case "*":
                $result = $first_num * $second_num;
                break;
            case "/":
                $result = $first_num / $second_num;
            case "%":
                $result = $first_num % $second_num;
        }
    }
}


?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div id="page-wrap" class="container mt-2" style="border:2px groove #0000FF">
        <h2 class="text-primary">PHP - Simple Calculator Program</h2>
        <form action="" method="post" id="quiz-form">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label display-6 text-primary">Enter Number 2</label>
                <input type="number" name="first_num" id="first_num" class="form-control" required="required" value="<?php echo $first_num; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label display-6 text-primary">Enter Number 2</label>
                <input type="number" name="second_num" id="first_num" class="form-control" required="required" value="<?php echo $second_num; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label display-6 text-primary">Result</label>
                <input readonly="readonly" disabled name="result" class="form-control" value="<?php echo $result; ?>">
            </div>
            <div class="mb-3 d-flex">
                <input type="submit" name="operator" value="+" class="btn btn-outline-primary form-control me-2 btn-lg" />
                <input type="submit" name="operator" value="-" class="btn btn-outline-primary form-control me-2 btn-lg" />
                <input type="submit" name="operator" value="*" class="btn btn-outline-primary form-control me-2 btn-lg" />
                <input type="submit" name="operator" value="/" class="btn btn-outline-primary form-control me-2 btn-lg" />
                <input type="submit" name="operator" value="%" class="btn btn-outline-primary form-control  btn-lg" />
            </div>

        </form>
    </div>
</body>

</html>