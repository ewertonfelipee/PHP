<?php

  $num1 = 10;

  if(is_int($num1)){
    $num2 = $num1 * 2;
    if($num2 > 100){
      echo "eh maior que 100";
    }
    else{
      echo "nao eh maior que 100";
    }
  }
  else{
    echo "nao eh um inteiro";
  }