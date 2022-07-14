<?php

  $str = (int)"test";
  $num1 = (int)12.4;
  $bool = (int)true;
  $arr = (int)[1,3,5,6,7,3];

  echo $str . "<br>";
  echo $num1 . "<br>";
  echo $bool . "<br>";
  echo $arr . "<br>";

  // Auto increment
  $num = 5;
  echo "+= ", $num +=2;
  echo "<br>";

  $num = 5;
  echo "+= ", $num -=2;
  echo "<br>";

  $num = 5;
  echo "+= ", $num *=2;
  echo "<br>";

  $num = 5;
  echo "+= ", $num /=2;
  echo "<br>";

  $num1 = 5;
  $num1++;
  echo "num1 = ", $num1;
  echo "<br>";
  
  $num2 = 5;
  echo "num2 = 5 + 1 = ", $num2 = $num2 + 1;