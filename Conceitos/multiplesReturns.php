<?php

  function changeData($name, $age){

    $name = "Mr. $name";
    $age = "$age years old!";

    return [$name, $age];
  }

  $data = changeData("Ewerton", 24);

  print_r($data);
  echo "<br>";
  echo "Hello, $data[0], you are $data[1]";