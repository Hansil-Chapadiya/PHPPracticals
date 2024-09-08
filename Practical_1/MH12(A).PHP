<?php
$arr1 = array(
    array(1, 2),
    array(2, 4)
);

$arr2 = array(
    array(2,4),
    array(5,6)
);

$arr3 = array();
$arr4 = array();

for ($i=0; $i < 2; $i++) {
    for ($j=0; $j < 2 ; $j++) {
        // $arr3[$i][$j] = $arr1[$i][$j] + $arr2[$i][$j];
        $num = $arr1[$i][$j] + $arr2[$i][$j];
        array_push($arr3,$num);
    }
}

for ($i=0; $i < 2; $i++) {
    for ($j=0; $j < 2 ; $j++) {
        $arr4[$i][$j] = 1;
        for ($k=0; $k < 2; $k++) {
            $arr4[$i][$j] = $arr1[$i][$k] * $arr2[$k][$j];
        }
    }
}


print_r($arr4);
?>
