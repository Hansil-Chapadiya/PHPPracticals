<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            font-size: 2vh;
        }
        th{
            font-size: 3vh;
            text-align: justify;
        }
    </style>
</head>

<body>
    <?php
    $n = 72;
    $str = "ViewPort_Where";
    ?>
    <table border="3" cellpadding="5" cellspacing="5" align="center">
        <tr>
            <td colspan="5" align="center"><h1>String function</h1></td>
        </tr>
        <tr>
            <th style="text-align: center;">Name:</th>
            <th style="text-align: center;">Example:</th>
            <th colspan="3" style="text-align: center;">Answer:</th>
        </tr>
        <tr>
            <th>char()</th>
            <td><?php echo "chr(72)<br>char(77)<br>char(104)"; ?></td>
            <td><?php echo chr(72); ?></td>
            <td><?php echo chr(77); ?></td>
            <td><?php echo chr(104); ?></td>
        </tr>
        <tr>
            <th>ord()</th>
            <td><?php echo "ord('m')<br>ord('H')<br>ord('M')"; ?></td>
            <td><?php echo ord('m'); ?></td>
            <td><?php echo ord('H'); ?></td>
            <td><?php echo ord('M'); ?></td>
        </tr>
        <tr>
            <th>strlower()</th>
            <td><?php echo "strlower($str)<br>strtolower($str.'HANSIL')<br>strtolower($str.'CHAPADIYA')"; ?></td>
            <td><?php echo strtolower($str); ?></td>
            <td><?php echo strtolower($str."HANSIL"); ?></td>
            <td><?php echo strtolower($str."CHAPADIYA"); ?></td>
        </tr>
        <tr>
            <th>strtoupper()</th>
            <td><?php echo "strtoupper($str)<br>strtoupper($str.'hansil')<br>strtoupper($str).'chapadiya'"; ?></td>
            <td><?php echo strtoupper($str); ?></td>
            <td><?php echo strtoupper($str."hansil"); ?></td>
            <td><?php echo strtoupper($str)."chapadiya"; ?></td>
        </tr>
        <tr>
            <th>strlen()</th>
            <td><?php echo "strlen($str)<br>strlen($str).'chapadiya'<br>strlen($str.'hansil')"; ?></td>
            <td><?php echo strlen($str); ?></td>
            <td><?php echo strlen($str."hansil"); ?></td>
            <td><?php echo strlen($str)."chapadiya"; ?></td>
        </tr>
        <tr>
            <th>ltrim()</th>
            <td><?php echo "ltrim("; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $str . ")<br>ltrim("; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Marc_1" . ")<br>ltrim("; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Steven_2" . ")"; ?></td>
            <td><?php echo ltrim($str); ?></td>
            <td><?php echo ltrim("Marc_1"); ?></td>
            <td><?php echo ltrim("Steven_1"); ?></td>
        </tr>
        <tr>
            <th>rtrim()</th>
            <td><?php echo "rtrim($str"; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ")<br>rtrim(Great"; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ")<br>rtrim(5Stars"; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ")<br>"; ?></td>
            <td><?php echo rtrim($str); ?></td>
            <td><?php echo rtrim("Great"); ?></td>
            <td><?php echo rtrim("5Stars"); ?></td>
        </tr>
        <tr>
            <th>trim()</th>
            <td><?php echo "trim(" ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $str; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ")<br>trim(" ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "10*14"; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ")<br>trim(" ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '8(9)'; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ")<br>"; ?></td>
            <td><?php echo rtrim($str); ?></td>
            <td><?php echo rtrim("10*14"); ?></td>
            <td><?php echo rtrim("8(9)"); ?></td>
        </tr>
        <tr>
            <th>substr()</th>
            <td><?php echo "substr($str, 5, -5)<br> substr($str, -5, 2)<br> substr($str, 2, -3)"; ?></td>
            <td><?php echo substr($str, 5, -5); ?></td>
            <td><?php echo substr($str, -5, 2); ?></td>
            <td><?php echo substr($str, 2, -3); ?></td>
        </tr>
        <tr>
            <th>strcmp()</th>
            <td><?php echo "strcmp($str, 'Viewport')<br>strcmp($str, 'ViewPort_Where')<br>strcmp($str, 'View');"; ?></td>
            <td><?php echo strcmp($str, "Viewport"); ?></td>
            <td><?php echo strcmp($str, "ViewPort_Where"); ?></td>
            <td><?php echo strcmp($str, "View"); ?></td>
        </tr>
        <tr>
            <th>strpos()</th>
            <td><?php echo "strpos($str, 'ViewPort',0)<br>strpos($str, '_Where',2)<br>strpos($str, 'Where',2);";?></td>
            <td><?php echo strpos($str, "ViewPort",0); ?></td>
            <td><?php echo strpos($str, "_Where",2); ?></td>
            <td><?php echo strpos($str, "Where",2); ?></td>
        </tr>
        <tr>
            <th>strstr()</th>
            <td><?php echo "strstr($str, 'Port')<br>strstr($str, 'ViewPort')<br>strstr($str, '_Where')";?></td>
            <td><?php echo strstr($str, "Port"); ?></td>
            <td><?php echo strstr($str, "ViewPort"); ?></td>
            <td><?php echo strstr($str, "_Where"); ?></td>
        </tr>
        <tr>
            <th>strrev()</th>
            <td><?php echo "strrev($str)<br>strrev($str.'hansil')<br>strrev($str.'mha')";?></td>
            <td><?php echo strrev($str);?></td>
            <td><?php echo strrev($str."hansil");?></td>
            <td><?php echo strrev($str."mha");?></td>
        </tr>
        <tr>
            <th>echo()</th>
            <td><?php echo "echo($str)<br>echo($str.'lock')<br>echo($str.'mha')";?></td>
            <td><?php echo($str);?></td>
            <td><?php echo($str."lock");?></td>
            <td><?php echo($str."mha");?></td>
        </tr>
        <tr>
            <th>print()</th>
            <td><?php echo "print($str)<br>print(true)<br>print(1014)";?></td>
            <td><?php echo print($str);?></td>
            <td><?php echo print(true);?></td>
            <td><?php echo print(1014);?></td>
        </tr>
    </table>
</body>
</html>


<!-- <tr>
            <th>str_replace()</th> -->
            <!-- <td><?php /*echo strpos($str[0],"R",$str); ?></td>
            <td><?php echo strpos($str[5],"W",$str);?></td>*/