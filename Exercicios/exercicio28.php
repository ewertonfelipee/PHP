<?php

  $i = 4;
  while($i < 30){

    echo "rodando o loop: $i <br>";
    
    if($i == 24){
      echo"Parando o loop";
      break;
    }
    
    $i +=2;
  }