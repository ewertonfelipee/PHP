<?php

  $size = "6.0";
  $price = 3000;
  $brand = "samsung";
  $cameras = 3;

  $cellPhone = compact("size", "price", "brand", "cameras");
  
  foreach($cellPhone as $phone => $value){
    echo "$phone: $value<br>";
  }
