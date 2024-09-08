<?php
if (isset($_POST['name'])) { //check set the variable
    $name = $_POST['name'];
    $age = $_POST['age'];
    $p="http://localhost/Hansil/Practical_4/MH1_1.php?name=$name&age=$age"; // querystring builder
    header("location:$p"); //Header function
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <div class="container mt-2" style="border: 2px solid blue;">
        <div class="d-flex justify-content:center mb-3">
            <label class="display-3">Querstring Builder</label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Text" value="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Enter Age: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="age" placeholder="Text" value="">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" id="exampleFormControlInput1" name="submit">
        </div>
    </form>
</body>
</html>
