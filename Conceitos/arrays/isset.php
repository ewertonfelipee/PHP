<?php

  $car = [
    "brand" => "bmw",
    "price" => 30000,
    "color" => "red"
  ];

  echo "isset over array: <br>";
  if(isset($car["price"])){
    echo "exists <br>";
  }
  else{
    echo "don't exists<br>";
  }

  echo "isset over variable: <br>";
  $x = 100;
  if(isset($x)){
    echo "exists";
  }
  else{
    echo "don't exists";
  }