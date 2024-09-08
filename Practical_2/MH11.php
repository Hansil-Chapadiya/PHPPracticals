<?php
echo "<table style='border:2px groove red; margin:2px; padding:25px;'><tr><td><h1>Sort functions</h1>";
$arr1 = array("Lang1" => "C++", "Lang2" => "Python", "Lang3" => "C#", "Lang4" => "JS"); //Three
$arr2 = array("Author" => "Arthur", "Surname" => "Doyal", "Book" => "Sherlock", "Published" => 1978);//Associative
$arr3 = array("Kane" => 10000, "Virat" => 12000, "Steve" => 5000, "Joe" => 8000);//Array
echo "<h2>Array<br></h2>";
print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br>";
print_r($arr3);
echo "</td></tr></table>"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .container{
            border: 2px solid red;
            padding: 25px;
            margin: auto;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
    <?php
    echo "<br><h3>Simple Sort with asort()</h2><br>"; //asort
    asort($arr1);
    asort($arr2);
    asort($arr3);
    print_r($arr1);
    echo "<hr>";
    print_r($arr2);
    echo "<hr>";
    print_r($arr3);
    echo "<hr>";

    echo "<h3>Sort with ksort()<br></h3>"; //key sort
    ksort($arr1);
    ksort($arr2);
    ksort($arr3);
    print_r($arr1);
    echo "<hr>";
    print_r($arr2);
    echo "<hr>";
    print_r($arr3);
    ?>
    </div>
   
    
</body>

</html>