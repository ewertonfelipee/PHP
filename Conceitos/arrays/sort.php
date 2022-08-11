<?php

  $arr = [1,3,4,5,6];

  echo "ascending order<br>";
  sort($arr);
  print_r($arr);
  echo "<br>";

  echo "descending order<br>";
  rsort($arr);
  print_r($arr);
  echo "<br>";

  $array = [
    "felipe" => 20,
    "jubileu" => 24,
    "beth" => 22
  ];

  asort($array);
  print_r($array);
  echo "<br>";
  ksort($array);
  print_r($array);