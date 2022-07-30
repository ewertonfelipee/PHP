<?php

  $str = "hi, Earth and Mars <br>";
  echo $str;
  $sub = substr($str, 4, 5);
  echo "$sub <br>";

  $sub1 = substr($str, 4);
  echo $sub1;

  $str1 = "hi, Earth and Mars asdadasd";
  echo $str1 . "<br>";
  $sub2 = substr($str1, 13, -8);
  echo $sub2 . "<br>";