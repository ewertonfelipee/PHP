<?php

  $age1 = "15";
  $str = false;
  $boolean = 4;

  if(is_int($age1)){
    echo "eh inteiro\n";
  }
  else{
    echo "nao eh inteiro\n";
  }

  if(is_string($str)){
    echo "eh string\n";
  }
  else{
    echo "nao eh string\n";
  }

  if(is_bool($boolean)){
    echo "eh boolean\n";
  }
  else{
    echo "nao eh boolean\n";
  }