<?php

  $car = [
    "brand" => "bmw",
    "price" => 30000,
    "color" => "red"
  ];

  $keys = array_keys($car);
  print_r($keys);
  echo "<br>";
  $values = array_values($car);
  print_r($values);
  echo "<br>";

  //  verificando se a chave existe
  echo "key exists returns 1, if key don't exists return 0(there isn't return on the screen)<br>";
  echo "key don't exists: <br>";
  $key_exists = array_key_exists("model", $car);
  echo $key_exists;

  echo "key exists: ";
  $key_exists = array_key_exists("color", $car);
  echo $key_exists;
  echo "<br>";