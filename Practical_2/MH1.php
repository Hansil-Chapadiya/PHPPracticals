<?php
$n1 = 10;
$n2 = "14";
$n3 = 24;
?>

<body>
    <table border="2" align="center" cellpadding="8" cellspacing="8" style="text-align: center;">
        <tr>
            <td colspan="4">
                <h1>VARIABLE FUNCTION<h1>
            </td>
        </tr>
        <tr>
            <td><b>Name</b></td>
            <td><b>Syntax</b></td>
            <td><b>Example</b></td>
            <td><b>Test</b></td>
            <!-- <td><b>Description</b></td> -->
        </tr>
        <tr>
            <th>
                <?php
                echo "gettype() Function";
                ?>
            </th>
            <td>
                gettype(variable
                name);
            </td>
            <td>
                <?php
                echo "gettype($n1) = ." . gettype($n1) . "<br>"; //gettype of variable
                echo "gettype($n2) = ." . gettype($n2) . "<br>";
                echo "gettype($n3) =." . gettype($n3) . "<br>";
                ?>
            </td>
            <td>
                -
            </td>
        </tr>
        <tr>
            <th>
                <?php
                echo "settype() Function";
                ?>
            </th>
            <td>
                settype(Variable
                name, Data type);
            </td>
            <td>
                <?php
                echo "settype($n1) = " . settype($n1, "int") . "<br>"; //settype of variable
                echo "settype($n2) = " . settype($n2, "float") . "<br>";
                echo "settype($n3) = " . settype($n3, "string") . "<br>";
                ?>
            </td>
            <td>
                <?php
                echo "gettype($n1) = " . gettype($n1) . "<br>";
                echo "gettype($n2) = " . gettype($n2) . "<br>";
                echo "gettype($n3) = " . gettype($n3) . "<br>";
                ?>
            </td>

        </tr>
        <tr>
            <th>
                <?php
                echo "isset() Function";
                ?>
            </th>
            <td>
                isset(Variable
                Name);
            </td>
            <td>
                <?php
                echo "isset($n1) = " . isset($n1) . "<br>"; //set the variable
                echo "isset($n2) = " . isset($n2) . "<br>";
                echo "isset(\$n3) = 0" . isset($n4) . "<br>";
                ?>
            </td>
            <td>
                -
            </td>

        </tr>
        <tr>
            <th>
                <?php
                echo "unset() Function";
                ?>
            </th>
            <td>
                unset(Variable
                Name);
            </td>
            <td>
                <?php
                unset($n1);
                unset($n2);
                unset($n3);
                echo "unset($n1) = " . "<br>"; //unset the variable
                echo "unset($n2) = " . "<br>";
                echo "unset($n3) = " . "<br>";
                ?>
            </td>
            <td>
                <?php
                echo "n1 is undefined " . "<br>";
                echo "n2 is undefined " . "<br>";
                echo "n3 is undefined " . "<br>";
                ?>
            </td>

        </tr>
        <tr>
            <th>
                <?php
                $n1 = 'Hansil';
                $n2 = "14";
                $n3 = 10;
                echo "strval() Function";
                ?>
            </th>
            <td>
                strval(variable
                name);
            </td>
            <td>
                <?php
                echo "strval('Hansil') = " . strval('Hansil') . "<br>"; // string converter
                echo "strval($n2) = " . strval($n2) . "<br>";
                echo "strval($n3) = " . strval($n3) . "<br>";
                ?>
            </td>
            <td>
            <?php
                echo "gettype('Hansil') = ." . gettype("Hansil") . "<br>"; //gettype of variable
                echo "gettype($n2) = ." . gettype($n2) . "<br>";
                echo "gettype($n3) =." . gettype($n3) . "<br>";
                ?>
            </td>

        </tr>
        <tr>
            <th>
                <?php
                echo "floatval() Function";
                ?>
            </th>
            <td>
                floatval(variable
                name);
            </td>
            <td>
                <?php
                echo "floatval('Hansil') = " . floatval('Hansil') . "<br>"; //float converter
                echo "floatval($n2) = " . floatval($n2) . "<br>";
                echo "floatval($n3) = " . floatval($n3) . "<br>";
                ?>
            </td>
            <td>
            <?php
                echo "gettype('Hansil') = ." . gettype("Hansil") . "<br>"; //gettype of variable
                echo "gettype($n2) = ." . gettype($n2) . "<br>";
                echo "gettype($n3) =." . gettype($n3) . "<br>";
                ?>
            </td>

        </tr>
        <tr>
            <th>
                <?php
                echo "intval() Function";
                ?>
            </th>
            <td>
                intval(variable
                name);
            </td>
            <td>
                <?php
                echo "intval('Hansil') = " . intval('Hansil') . "<br>"; //int converter
                echo "intval($n2) = " . intval($n2) . "<br>";
                echo "intval($n3) = " . intval($n3) . "<br>";
                ?>
            </td>
            <td>
            <?php
                echo "gettype('Hansil') = ." . gettype("Hansil") . "<br>"; //gettype of variable
                echo "gettype($n2) = ." . gettype($n2) . "<br>";
                echo "gettype($n3) =." . gettype($n3) . "<br>";
                ?>
            </td>

        </tr>
        <tr>
            <th>
                <?php
                echo "print_r() Function";
                ?>
            </th>
            <td>
                print_r(variable
                name);
            </td>
            <td>
                <?php
                print_r("Using Print_r<br>"); //language construct
                print_r($n3 . "<br>");
                print_r(array(1, 2, 3, 4));
                ?>
            </td>
            <td>
                -
            </td>

        </tr>
    </table>
</body>