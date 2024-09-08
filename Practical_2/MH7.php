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
            <th>Name</th>
            <th>Example</th>
            <th>Output</th>
        </tr>
        <tr>
            <td rowspan="3"><b>getdate()</b></td>
            <td>getdate()</td>
            <td><?php print_r(getdate()); //getdate?></td>
        </tr>
        <tr>
            <td>getdate(10)</td>
            <td><?php echo print_r(getdate(10)); ?></td>
        </tr>
        <tr>
            <td>getdate(mktime(5,7,8,11,14,2000))</td>
            <td><?php print_r(getdate(mktime(5, 7, 8, 11, 14, 2000))); //getdate using timestamp?></td>
        </tr>
        <tr>
            <td rowspan="3"><b>checkdate()</b></td>
            <td>checkdate(11,14,2000)</td>
            <td><?php echo checkdate(11, 14, 2000)?"<b>true</b>":"false"; //valid date or not ?></td>
        </tr>
        <tr>
            <td>checkdate(8,10,2004)</td>
            <td><?php echo checkdate(8, 10, 2004)?"<b>true</b>":"false"; //valid date or not ?></td>
        </tr>
        <tr>
            <td>checkdate(11,31,2004)</td>
            <td><?php echo checkdate(11, 31, 2000)?"<b>true</b>":"false"; //valid date or not?></td>
        </tr>
    </table>
</body>