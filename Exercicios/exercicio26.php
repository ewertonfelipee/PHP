<?php

  $velocity = 40;
  $maxVelocity = 40;

  if($velocity < $maxVelocity){
    echo "velocidade correta";
  }
  else if($velocity === $maxVelocity){
    echo "tome cuidado!";
  }
  else{
    echo "Multa!";
  }
