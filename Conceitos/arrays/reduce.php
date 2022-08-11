<?php

  $arr = [1,3,4,5,6];

  function sum($a, $b){
    return $a + $b;
  }

  $result = array_reduce($arr, "sum");

  echo "$result<br>";