<?php

  $arr = [1,2,true,"ola",5,false,"hey",8,"hello",10];
  $i = 0;
  //echo $arr;
  while($i < 10){
    if(is_string($arr[$i])){
      echo "eh string: $arr[$i]<br>";
    }

    $i++;
  }