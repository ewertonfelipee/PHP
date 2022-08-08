<?php

  $car = [
    "brand" => "ferrari",
    "price" => 30000,
    "color" => "red"
  ];

  extract($car);

  echo "$brand<br>";
  echo "$price<br>";
  echo "$color<br>";

  $name = "ewerton";

  $person = [
    "name" => "felipe"
  ];

  echo "$name -> before extract<br>";

  extract($person);
  echo "$name -> after extract<br>";