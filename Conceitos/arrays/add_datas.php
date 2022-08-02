<?php

  $arr = [];
  echo "before reassignment<br>";
  $arr[0] = 1;
  print_r($arr);
  echo "<br>";
  $arr[1] = 15;
  print_r($arr);
  echo "<br>";
  $arr[2] = "ewerton";
  print_r($arr);
  echo "<br>";

  echo "after reassignment<br>";
  $arr[0] = "felipe";
  print_r($arr);
  echo "<br>";


  $arr2["key1"] = "felipe";
  print_r($arr2);
  echo "<br>";
  
  //  add element at the end
  $arr3 = [1,3, 4, 5];
  $arr3[] = "ewerton";
  print_r($arr3);