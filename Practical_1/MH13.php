<?php
    echo "<b> Numeric Array </b> <br>";
    $arr1 = array(12,15,16);
    print_r($arr1);
    echo "<hr>";

    echo "</br><b> Associated Array </b><br>";
    $arr1 = array('Name'=>"Hansil",'Age' => "18", 'Profession' => 'Engineer');
    print_r($arr1);
    echo "<hr>";

    echo "</br><b> Multi-Diamension Array </b><br>";
    $arr2 = array(array(2,3,5),
                   array(6,7,7),
                   array(8,5,6));

    print_r($arr2);
    echo "<hr>";
?>
