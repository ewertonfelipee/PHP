<?php

    $person = ["Name" => "John",
                "Role" => "Admin",
                "Age" => 25,
                "Gender" => "Male"];

    $adulthood = 18;
    if($person["Age"] > $adulthood){
        echo "Maior de idade <br>";
    }
    else{
        echo "Menor de idade";
    }