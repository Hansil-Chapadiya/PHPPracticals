<?php
$arr1 = array(
    array("C", "C++", "Python", "C#"),
    array("GO", "SQL", "PHP", "JS"),
    array("JAVA", "CSS", "HTML", "SWIFT")
);

$arr2 = array("ML", "AI", "GRAPHICS", "COMPETATIVE", "MATHS");
$arr3 = array("Kane" => 10000, "Virat" => 12000, "Steve" => 5000, "Joe" => 8000);

list($a, $b, $c) = $arr2;
list($d, $e) = $arr1[0];
list($f, $g, $h, $i) = $arr1[2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="3" cellspacing="5" cellpadding="5">
        <tr>
            <th colspan="3"><h1>ARRAY FUNCTIONS</h1></th>
        </tr>
        <tr>
            <th>Array -> 1</th>
            <td colspan="2"><?php print_r($arr1) ?></td>
        </tr>
        <tr>
            <th>Array -> 2</th>
            <td colspan="2"><?php print_r($arr2) ?></td>
        </tr>
        <tr>
            <th>Array -> 2</th>
            <td colspan="2"><?php print_r($arr3) ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <th>Example</th>
            <th>Output</th>
        </tr>
        <tr>
            <th>Count()</th>
            <td>count($arr1)<br>count($arr2)<br>count($arr1, COUNT_RECURSIVE)</td>
            <td><?php echo count($arr1) . "<br>" . count($arr2) . "<br>" . count($arr1, COUNT_RECURSIVE)  ?></td>
        </tr>
        <tr>
            <th>list()</th>
            <td>list($a,$b,$c)=$arr2<br> list($d,$e)=$arr1[0]<br>list($f,$g)=$arr1[2]</td>
            <td><?php echo "list->1 =($a,$b,$c)<br>list->2=($d,$e)<br>list->3=($f,$g,$h,$i)" ?></td>
        </tr>
        <tr>
            <th>in_array()</th>
            <td>in_array(10000,$arr3)<br>in_array("GO",$arr1,1)<br>in_array("ml",$arr2,1)</td>
            <td><?php echo in_array(10000, $arr3) . "<br>" . in_array("GO", $arr1[1], 1) . "<br>" . in_array("ml", $arr2, 1) . "0"; ?></td>
        </tr>
        <tr>
            <th>Current()</th>
            <td>current($arr1)<br>current($arr2)<br>current($arr3)</td>
            <td><?php echo current($arr1[2]) . "<br>" . current($arr2) . "<br>" . current($arr3); ?></td>
        </tr>
        <tr>
            <th>next()</th>
            <td>next($arr1[0])<br>next($arr2)<br>next($arr3)</td>
            <td><?php echo next($arr1[0]) . "<br>" . next($arr2) . "<br>" . next($arr3); ?></td>
        </tr>
        <tr>
            <th>prev()</th>
            <td>prev($arr1[2])<br>prev($arr2)<br>prev($arr3)</td>
            <td><?php echo prev($arr1[2]) . "<br>" . prev($arr2) . "<br>" . prev($arr3); ?></td>
        </tr>
        <tr>
            <th>end()</th>
            <td>end($arr1[0])<br>end($arr2)<br>end($arr3)</td>
            <td><?php echo end($arr1[1]) . "<br>" . end($arr2) . "<br>" . end($arr3); ?></td>
        </tr>
        <!-- <tr>
            <th>each()</th>
            <td>each($arr1)<br>each($arr2)<br>each($arr3)</td>
            <td><?php //echo each($arr1[2]) . "<br>" . each($arr2) . "<br>" . each($arr3); 
                ?></td>
        </tr> -->
        <tr>
            <th>sort()</th>
            <td>sort($arr1[0],SORT_STRING)<br>sort($arr2,SORT_NUMERIC)<br>sort($arr3,SORT_NATURAL)</td>
            <td><?php echo sort($arr1[0],SORT_STRING) . "<br>" . sort($arr2,SORT_NUMERIC) . "<br>" . sort($arr3,SORT_NATURAL); ?></td>
        </tr>
        <tr>
            <th>sort() output</th>
            <td colspan="2"><?php print_r($arr1[0]); print_r($arr1[2]) . print_r($arr2); print_r("<br>") . print_r($arr3) ?></td>
        </tr>
        <tr>
            <th>array_merge()</th>
            <td>array_merge($arr1[0],$arr3)<br>array_merge($arr2,$arr3)<br>array_merge($arr3,$arr1[1])</td>
            <td><?php print_r(array_merge($arr1[0],$arr3)); print_r("<br>"). print_r(array_merge($arr2,$arr3)); print_r("<br>") . print_r(array_merge($arr3,$arr1[1]))?></td>
        </tr>
        <tr>
            <th>arrry_reverse()</th>
            <td>array_reverse($arr1[1],true)<br>array_reverse($arr2)<br>array_reverse($arr3,true)</td>
            <td><?php print_r(array_reverse($arr1[1],true)); print_r("<br>"). print_r(array_reverse($arr2)); print_r("<br>") . print_r(array_reverse($arr3,true))  ?></td>
        </tr>
        <tr>
            <th>reset()</th>
            <td>reset($arr1[0])<br>reset($arr2)<br>reset($arr3)</td>
            <td><?php echo reset($arr1[0])."<br>". reset($arr2). "<br>" . reset($arr3);  ?></td>
        </tr>
    </table>
</body>

</html>