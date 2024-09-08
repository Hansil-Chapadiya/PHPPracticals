<table  border="3" cellpadding="5" cellspacing="5">
    <?php
    echo "<h1>implode()</h1><hr>"; //convert array to string
    $array1 = array("Hansil", "The", "Great");
    $array2 = array("Alexandra", "The", "Great");
    $array3 = array("Vikramaditya", "The", "Great");

    echo "<tr><td><b>Before Convert: </b><br>" ?>
    <td><?php print_r($array1); ?></td>

    <?php echo "<td><b>After Convert: </b><br>";
    print_r(implode(",",$array1)); ?></td>
    </tr>

    <?php
    echo "<tr><td><b>Before Convert: </b><br>" ?>
    <td><?php print_r($array2); ?></td>

    <?php echo "<td><b>After Convert: </b><br>";
    print_r(implode($array2)); ?></td>
    </tr>

    <?php
    echo "<tr><td><b>Before Convert: </b><br>" ?>
    <td><?php print_r($array3); ?></td>

    <?php echo "<td><b>After Convert: </b><br>";
    print_r(implode($array3)); ?></td>
    </tr>
</table>
<hr>

<table border="3" cellpadding="5" cellspacing="5">
<?php
echo "<h1>explode()</h1><hr>"; //convert string to the array
$str1 = 'Hansil,The,Great';
$str2 = "Alexandra-The-Great";
$str3 = "Vikramaditya*The*Great";

echo "<tr><td><b>Before Convert: </b><br>" ?>
<td><?php print_r($str1); ?></td>

<?php echo "<td><b>After Convert: </b><br>";
print_r(explode(",",$str1,3)); ?></td>
</tr>

<?php
echo "<tr><td><b>Before Convert: </b><br>" ?>
<td><?php print_r($str2); ?></td>

<?php echo "<td><b>After Convert: </b><br>";
print_r(explode("-",$str2,-1)); ?></td>
</tr>

<?php
echo "<tr><td><b>Before Convert: </b><br>" ?>
<td><?php print_r($str3); ?></td>

<?php echo "<td><b>After Convert: </b><br>";
print_r(explode("*",$str3,2)); ?></td>
</tr>
</table>
<hr>