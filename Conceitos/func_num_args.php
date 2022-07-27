<?php

  function sum($a, $b){

    //  Arguments count number
    print_r(func_num_args());
    
    return $a + $b;
  }

  sum(3,5);