<?php
function customErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo '<h3>This Error is Display using Custom Error Handler</h3>';
    echo "<b>Error : </b> [$errno] $errstr<br>";
    echo "Error on line $errline in $errfile<br>";
    return true;
}
set_error_handler('customErrorHandler');

echo $b;
echo "<h4>This message will Execute even if error ocuurs.</h4>";
