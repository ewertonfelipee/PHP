<?php

  $matrix = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
  ];

  for($i = 0; $i < count($matrix); $i++){

    echo "print external array: " . ($i+1)."<br>";
    // iterates over elements
    for($j = 0; $j < count($matrix[$i]); $j++){
      echo $matrix[$i][$j]."<br>";
    }
  }