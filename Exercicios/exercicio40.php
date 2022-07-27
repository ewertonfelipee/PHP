<?php

  $str = "O rato roeu a roupa do rei de Roma";
  $count = 0; // count must be outside the loop

  for($i = 0; $i < strlen($str); $i++){
    if($str[$i] === 'a'){
      $count++;
    }
  }
  echo "the number 'a' is: " . $count;