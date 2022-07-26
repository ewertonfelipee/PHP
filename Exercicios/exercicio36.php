<?php

  function vetor(){
    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
    foreach($arr as $number){
      if($number > 7){
        $arr2 = [];
        $arr2 = $number;
        echo "$arr2 <br>";
      }
    }
  }
  vetor();
?>