<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "ViewPort_Where";
        $arr = array("Coordinate","Great","viewport");
        $arr2 = array("Gujarat","Auckland");
        
        echo "<h1>Replace Function</h1>";
        echo "<h2>String to String</h2>";
        echo "str_replace('V','R',$str)<br>"; //string to string
        echo str_replace($str[0],"R",$str)."<br><hr>"; 

        echo "<h2>String to Array</h2>";
        echo "str_replace('_WHERE','Great',$str)<br>"; //string to array
        echo str_replace($arr[1],'_WHERE',$str)."<br><hr>";

        echo "<h2>String to Array</h2>";
        echo "str_replace('_','Cordinates',$str)<br>";//string to array
        echo str_replace($str[8],$arr[0],$str)."<br><hr>";

        echo "<h2>Array to Array</h2>";
        echo "str_replace()<br>";
        print_r($arr); 
        echo "<br>After replace<br>";
        print_r(str_replace($arr,$arr2,$arr)); //array to array
    ?>
</body>
</html>