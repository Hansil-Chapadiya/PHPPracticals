<?php
echo "Enter Three Numbers\n";
echo "\nFirst Number:";
$a=fgets(STDIN);
echo "\nSecond Number:";
$b=fgets(STDIN);
echo "\nThird Number:";
$c=fgets(STDIN);

if($a<$b){
    if($b<$c){
        echo "\n".$c." Is Greatest ";
    }else{
        echo "\n".$b." Is Greatest";
    }
}else{
    if($a<$c){
        echo "\n".$c." Is Greatest ";
    }else{
        echo "\n".$a." Is Greatest ";
    }
}
