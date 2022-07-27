<?php

  function sum($a, $b){

    print_r(func_get_args());
    
    return $a + $b;
  }

  sum(3,5);