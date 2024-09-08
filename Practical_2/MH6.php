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
            <th>date() Function</th>
            <th>Example</th>
        </tr>
        <tr>
            <td><?php echo "<b>date</b>('dayOfMonth <b>/</b> numericMonth <b>/</b> yearWith2d',mktime(12(h),42(m),6(s),11(month),14(day),2000(y)"; ?></td>
            <td><?php echo date('d/n/y',mktime(12,42,6,11,14,2000)); ?></td>
        </tr>
        <tr>
            <td><?php echo "<b>date</b>('DayWithText(3) <b>/</b> MonthWithText(3) <b>/</b> YearWith4d',mktime(8(h),42(m),16(s),8(month),10(day),2004(y))";?></td>
            <td><?php echo date('D/M/Y',mktime(8,42,16,8,10,2004));?></td>
        </tr>
        <tr>
            <td><?php echo "<b>date</b>('lowercaseLDay - FullMonthName - yearWith2d')";?></td>
            <td><?php echo date('l-F-y');?></td>
        </tr>
        <tr>
            <td><?php echo "<b>date</b>('dayOfMonth <b>/</b> (m)numericMonth <b>/</b> YearWith4d' hour(12): minutewithI(i):second aSmall(am/pm)"; ?></td>
            <td><?php echo date('d-m-Y h:i:s a',mktime(8,42,16,8,10,2004));?></td>
        </tr>
        <tr>
            <td><?php echo "<b>date</b>('dayOfMonth(10) <b>/</b> MonthWithText(3) <b>/</b> YearWith4d' hourwithH(24): minutewithI(i):second Acap(AM/PM)"; ?></td>
            <td><?php echo date('j-M-Y H:i:s A');?></td>
        </tr>
        <tr>
            <td><?php echo "<b>date</b>('dayOfMonth <b>/</b> (m)numericMonth <b>/</b> YearWith4d' hourwithG(24): minutewithI(i):second aSmall(am/pm)"; ?></td>
            <td><?php echo date('d-m-Y G:i:s a');?></td>
        </tr>
        <tr>
            <td><?php echo "<b>date</b>('dayOfMonth <b>/</b> MonthWithText(3) <b>/</b> YearWith4d' hourwithg(12): minutewithI(i):second aSmall(am/pm)"; ?></td>
            <td><?php echo date('d-M-Y g:i:s a',mktime(8,42,16,8,10,2004));?></td>
        </tr>
    </table>

</body>

</html>