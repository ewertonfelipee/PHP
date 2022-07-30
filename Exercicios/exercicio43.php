<?php

  // string to array
  $str = "carro - navio - helicóptero - barco - jangada <br>";
  echo $str;
  $exp = explode("-",$str);
  print_r($exp);