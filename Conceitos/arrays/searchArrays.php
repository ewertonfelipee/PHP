<?php

  $arr = [1,3,4,5,6];

  $search = in_array("10", $arr);
  
  if($search === true){
    echo "element exist";
  }
  else{
    echo "element don't exist";
  }