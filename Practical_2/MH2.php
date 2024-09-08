<?php
function type_testing()
{
    $len = func_num_args(); //get number of arguments
    $arr = func_get_args(); //get arguments

?>

    <head>
        <style type="text/css">
            .display{
                display: flex;
                margin: auto;
            }
            .mrgn{
                margin: 1vh;
            }
        </style>
    </head>

    <body class="display">
        <?php foreach ($arr as $key => $value) { ?>
            <table border="3" cellspacing="5" cellPadding="5" class="mrgn">
                <tr>
                    <th><?php echo $value; ?></th>
                </tr>
                <tr>
                    <td><?php
                        //checking
                        echo "is_bool($value) = " . (is_bool($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_string($value) = " . (is_string($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_numeric($value) = " . (is_numeric($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_long($value) = " . (is_long($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_int($value) = " . (is_int($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_integer($value) = " . (is_integer($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_double($value) = " . (is_double($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_float($value) = " . (is_float($value) ? "<b>True</b>" : "false") . "</td></tr>";
                        echo "<tr><td>is_null($value) = " . (is_null($value) ? "<b>True</b>" : "false") . "</td></tr></table>";
                        ?>
                <?php
            }
        }
        //variable length array
        type_testing("10",14,"Hansil",true,10.14); ?> 