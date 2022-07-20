<?php

  $arr = [];
  for($i = 10; $i <= 20; $i++){
    array_push($arr, $i);
  }

  print_r($arr);
  echo "<br>";
  
  for($i = 10; $i <=20; $i++){
    if(array_push($arr, $i) % 2 == 1){
      echo "$i <br>";
    }
  }
  //print_r($arr);