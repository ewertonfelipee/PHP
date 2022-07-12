<?php

    $var1 = "string  with double quotes";
    $var2 = 'string with simple quotes';

    echo $var1;
    echo "<br>";
    echo $var2;
    echo "<br>";

    if(is_string($var1)){
        echo "var1 is: true";
    }
    else{
        echo "var1 is: false";
    }