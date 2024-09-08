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
    <form action="" method="post">
        <div class="container mt-2" style="border: 2px solid blue;" id="div1">
            <div class="d-flex justify-content:center mb-3">
                <label class="display-3">Session Example</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Enter Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Text" value="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="age" placeholder="Text" value="">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="exampleFormControlInput1" name="submit" value="Create Session"><br>

                <!-- <input type="button" class="form-control btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="exampleFormControlInput1" name="submit2" value="Modify Cookie"><br>
                <input type="button" class="form-control btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="exampleFormControlInput1" name="submit3" value="Delete Cookie"><br>
                <input type="button" class="form-control btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="exampleFormControlInput1" name="submit4" value="Show Cookie"><br> -->
            </div>
    </form>
</body>

</html>
<?php
session_start();
if (isset($_POST["submit"])) {
    // $_SESSION['name'] = $_POST['name'];
    $_SESSION['name'] = "Hansil";
    echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Working with Session</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Session Created
                </div>
            </div>
        </div>
    </div>';
    // $_SESSION['age'] = $_POST['age'];
    $_SESSION['age'] = "18";
}
?>