<?php

  $arr = range(10,45);
  $sum = 0;
  foreach($arr as $value){
    $sum = $value + 6;
    
    if($sum > 30){
      echo "valor $sum muito alto<br>";
    }
    else{
      echo "$sum<br>";
    }
  }