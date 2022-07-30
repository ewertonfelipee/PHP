<?php

  $str = "Hi i'm ewerton";
  $exp = explode(" ", $str);
  print_r($exp);

  echo "<br>";

  $str2 = "Hi, i'm, ewerton";
  $exp2 = explode(",", $str2);
  print_r($exp2);

  echo "<br>";

  $str3 = "Hi: i'm: ewerton";
  $exp3 = explode(":", $str3);
  print_r($exp3);