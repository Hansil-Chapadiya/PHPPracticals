<head>
    <style>
        .btn{
            background: transparent;
            height: 5vh;
            width: 15vh;
            color: aliceblue;
        }
        .btn:hover{
            cursor: pointer;
            background-color: black;
        } 
    </style>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label><h2>Select Game</h2></label>
        <input type="checkbox" name="CheckBox[]" value="Cricket">Cricket<br>
        <input type="checkbox" name="CheckBox[]" value="Chess">Chess<br>
        <input type="checkbox" name="CheckBox[]" value="Ludo">Ludo<br>
        <input type="submit" class="btn" name="submit">
    </form>
    <?php
    $game = " ";
    if (isset($_POST["submit"])) {
        if (!empty($_POST["CheckBox"])) {
            foreach ($_POST["CheckBox"] as $selected) {
                $game = $game . " " . $selected;
            }
        }
    }
    echo "<table><tr><th>Multi Value Selected</th></tr><tr><td>" . $game . "</td></tr></table>";
    ?>
</body>