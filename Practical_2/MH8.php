<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $datetime = new DateTime(); //create instance of datetime
    $Year = '2004';
    $Month = '08';
    $Day = '14';

    ?>
    <table border="3" cellspacing="5" cellpadding="5">
        <tr>
            <th>Name </th>
            <th>Example</th>
            <th>Output</th>
        </tr>
        <tr>
            <td><b>Setdate()</b></td>
            <td>setDate('2004','08','14')</td>
            <td><?php echo $datetime->setDate($Year, $Month, $Day) ? "<b>true<?b>" : "false"; //set date ?></td>
        </tr>
        <tr>
            <td rowspan="3"><b>Time()</b></td>
            <td>echo Time()</td>
            <td><?php echo Time(); ?></td>
        </tr>
        <tr>
            <td>print_r(date("d-m-y",Time() + (24*7*60*60)))</td>
            <td><?php print_r(date("d-m-y", Time() + (24 * 7 * 60 * 60))) //hours*days*minutes*seconds?></td>
        </tr>
        <tr>
            <td>print_r(date("d-m-y",Time() + (22*7*40*30)))</td>
            <td><?php print_r(date("d-m-y", Time() + (24 * 7 * 40 * 30))) //hours*days*minutes*seconds?></td>
        </tr>
        <tr>
            <td rowspan="3"><b>mktime()</b></td>
            <td>mktime(10)</td>
            <td><?php echo mkTime(10); //mktime?></td>
        </tr>
        <tr>
            <td>mktime(1,2,5,10,14,2004)</td>
            <td><?php echo mkTime(1,2,5,10,14,2004); ?></td>
        </tr>
        <tr>
            <td>mktime(1,2,5,14,10,2000)</td>
            <td><?php echo mkTime(1,2,5,14,10,2000); ?></td>
        </tr>
    </table>
</body>

</html>