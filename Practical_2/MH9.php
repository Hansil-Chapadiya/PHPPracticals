<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="3" cellspacing="5" cellpadding="5" align="center">
        <tr>
            <th colspan="3" align="center">MATHS FUNCTIONS</th>
        </tr>
        <tr>
            <th>Name </th>
            <th>Example</th>
            <th>Output</th>
        </tr>
        <tr>
            <th>abs()</th>
            <td>abs(14.05)<br>abs(-10.14)<br>(-24)</td>
            <td><?php echo abs(14.05) . "<br>" . abs(-10.14) . "<br>" . abs(-24) ?></td>
        </tr>
        <tr>
            <th>ceil()</th>
            <td>ceil(-14.10)<br>ceil(10.14)<br>ceil(02.8*0.90)</td>
            <td><?php echo ceil(-14.10) . "<br>" . ceil(10.14) . "<br>" . ceil(02.8*0.90) ?></td>
        </tr>
        <tr>
            <th>floor()</th>
            <td>floor(-14.10)<br>floor(10.14)<br>floor(02.8*0.25)</td>
            <td><?php echo floor(-14.10) . "<br>" . floor(10.14) . "<br>" . floor(02.8*0.25) ?></td>
        </tr>
        <tr>
            <th>round()</th>
            <td>round(-14.5)<br>round(10.14)<br>round(12.2*0.25)</td>
            <td><?php echo round(-14.05) . "<br>" . round(10.14) . "<br>" . round(12.2*0.25) ?></td>
        </tr>
        <tr>
            <th>fmod()</th>
            <td>fmod(-14.10,2)<br>fmod(10.14,10)<br>fmod(12.8,5)</td>
            <td><?php echo fmod(-14.10,2) . "<br>" . fmod(10.14,10) . "<br>" . fmod(12.8,5) ?></td>
        </tr>
        <tr>
            <th>min()</th>
            <td>min(-14.10,14)<br>min(10.14,10)<br>min(02.8,0.9)</td>
            <td><?php echo min(-14.10,14) . "<br>" . min(10.14,10) . "<br>" . min(02.8,0.9) ?></td>
        </tr>
        <tr>
            <th>max()</th>
            <td>max(90,-170)<br>max(56*(-12),156)<br>max(172.0001,172.01000)</td>
            <td><?php echo max(90,-170) . "<br>" . max(56*(-12),156) . "<br>" . max(172.0001,172.01000) ?></td>
        </tr><tr>
            <th>pow()</th>
            <td>pow(-14.10)<br>pow(10.14)<br>pow(02.8)</td>
            <td><?php echo pow(-14,10) . "<br>" . pow(10,14) . "<br>" . pow(02,-8) ?></td>
        </tr>
        <tr>
            <th>sqrt()</th>
            <td>sqrt(-1)<br>sqrt(0)<br>sqrt(22.-8)</td>
            <td><?php echo sqrt(-1) . "<br>" . sqrt(0) . "<br>" . sqrt(22.-8) ?></td>
        </tr>
        <tr>
            <th>rand()</th>
            <td>rand()<br>rand(10.14)<br>rand(0.50)</td>
            <td><?php echo rand() . "<br>" . rand(10,14) . "<br>" . rand(0.50,0.70) ?></td>
        </tr>
    </table>
</body>

</html>