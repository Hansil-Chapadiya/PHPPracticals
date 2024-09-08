<?php
    function get_max_min()
    {
        $n = func_num_args();
        $v = func_get_args();
        sort($v);
        $min = $v[0];
        $max = $v[$n-1];
        echo "<br><b>Maximum</b> = ".$max;
        echo "<br><b>Minimum</b> = ".$min;
    }

    $arr = array(10,14,16,18,20);
    echo "<h1>Arguments</h1><br>";
    foreach ($arr as $i)
    {
        echo "$i ";
    }
    get_max_min(10,14,16,18,20);
?>