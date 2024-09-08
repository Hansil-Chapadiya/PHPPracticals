<?php

// ------------------------------------------1ND-----------------------------------------------
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        $arr1[$i][$j] = $j;
    }
}
echo "FIRST MATRIX<br>";

echo "<table border='2' cellpadding='11'><tr>";
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "<td>" . $arr1[$i][$j] . "</td>";
    }
    echo "<br></tr>";
}
echo "</table>";
echo "<hr>";

// ------------------------------------------2ND-----------------------------------------------
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        $arr2[$i][$j] = $j;
    }
}

echo "SECOND MATRIX<br>";

echo "<table border='2' cellpadding='11'><tr>";
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "<td>" . $arr2[$i][$j] . "</td>";
    }
    echo "<br></tr>";
}
echo "</table>";
echo "<hr>";

// ------------------------------------------ADD-----------------------------------------------
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        $arr3[$i][$j] = $arr1[$i][$j] + $arr2[$i][$j];
    }
}

echo "ADDITION OF MATRICIES<br>";

echo "<table border='2' cellpadding='11'><tr>";
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "<td>" . $arr3[$i][$j] . "</td>";
    }
    echo "<br></tr>";
}
echo "</table>";
echo "<hr>";

// ------------------------------------------MUL-----------------------------------------------
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        $arr3[$i][$j] = 1;
        for ($k = 1; $k <= 2; $k++) {
            $arr3[$i][$j] = $arr1[$i][$k] * $arr2[$k][$j];
        }
    }
}
echo "MULTIPLICATION OF MATRICES<br>";
echo "<table border='2' cellpadding='11'><tr>";
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "<td>" . $arr3[$i][$j] . "</td>";
    }
    echo "<br></tr>";
}
echo "</table>";
echo "<hr>";
?>
