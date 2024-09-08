<?php 
    $n1 = 15;
    $n2 = 20;
    $n3 = 10;

    echo "Numbers : $n1 $n2 $n3<br>";
    if ($n1 > $n2) {
        if ($n1 > $n3) {
            echo $n1." is Maximum";
        }
        else{
            echo $n3." is Maximum";
        }
    }
    else{
        if ($n2 > $n3) {
            echo $n2." is Maximum";
        }
        else{
            echo $n3." is Maximum";
        }
    }
?> -->