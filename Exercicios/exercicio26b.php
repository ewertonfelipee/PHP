<?php

  $weight = 70;
  $height = 1.69;

  $IMC = $weight/($height**2);

  if($IMC < 20){
    echo "subpeso";
  }
  else if($IMC >= 20 && $IMC <= 25){
    echo "Normal";
  }
  else{
    echo "sobrepeso";
  }
