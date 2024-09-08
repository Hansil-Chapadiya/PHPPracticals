<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>

<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <div class="container mt-2" style="border: 2px solid blue;">
            <div class="d-flex justify-content:center mb-3">
                <label class="display-3">Authentication Using Session</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Text" name="uname">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password:</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" name="pname">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-info" type="reset" name="reset">
            </div>
        </div>
    </form>
</body>
<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $uname = $_REQUEST['uname'];
    $pname = $_REQUEST['pname'];
    $_SESSION['uname'] = $uname;
    $_SESSION['pname'] = $pname;
    $loc = "http://localhost/Hansil/Practical_4/MH5_1.php?uname=$uname&pname=$pname";
    header("location:$loc");
}
?>