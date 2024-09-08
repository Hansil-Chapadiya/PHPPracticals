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
        function fact ($n)  
        {  
            if($n <= 1)   
            {  
                return 1;  
            }  
            else   
            {  
                return $n * fact($n - 1);  
            }  
        }        
        echo "Factorial of 0 is " .fact(-1);  
    ?>
</body>
</html>