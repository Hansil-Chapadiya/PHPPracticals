<?php
    $quertstring = $_SERVER['QUERY_STRING'];

    parse_str($quertstring,$queryparams);

    echo "Name = ". $queryparams['name'] . "<br>";
    echo "Age = " . $queryparams['age'];
?>