<?php

  $car = ["ferrari" => 2000000, "wheel" => 3000, "secure" => 50000, "door" => 2500];
  function carArray($car){
    $carItens = [];
    foreach($car as $iten => $price){
      if($price > 10000){
        array_push($carItens, $iten);
      }
    }

    return $carItens;
  }

  print_r(carArray($car));