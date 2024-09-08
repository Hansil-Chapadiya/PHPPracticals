<?php
    $file  = fopen("MH12.txt","w");//create the file

    //write the in the file
    fwrite($file,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis iure fugiat officiis quia 
    assumenda ullam sint neque quaerat ea! Ab qui aut dolorum eius labore velit itaque minus error.",100);

    fclose($file);

    echo "writing successfull in file<br>";

    //open the file in read mode
    
    $file = fopen("MH12.txt","r");

    $content = fread($file,100);
    fclose($file);

    echo "<h2>Content Read From File:</h2><br> ";
    echo $content;

    //append in the file

    $file = fopen("MH12.txt","a+");

    fwrite($file,"Hello there, I am the hansil Chapadiya , Student of Information Technology Student");

    echo "<br>Append operation Successfull in file<br>";
    fclose($file);

    //open file x/x+ mode

    $file = fopen("MH12.csv","x+");

    fwrite($file,"Hello there, I am the hansil Chapadiya , Student of Information Technology Student");
    fclose($file);

    echo "<br>Successfull Opening csv file";

    //open file c/c+ mode

    $file = fopen("MH12.csv","c+");

    $content = fread($file,100);

    echo "<h2>Content Read From csv File:</h2><br> ";
    echo $content;

    fclose($file);

?>
