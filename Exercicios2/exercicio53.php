<?php

  class Dog{

    function latir(){
      echo "Au au<br>";
    }

    function andar($metros){
      echo "andou $metros metros<br>";
    }

  }

  $ozzy = new Dog;
  $toto = new Dog;

  $ozzy->latir();
  $ozzy->andar(50);

  $toto->andar(100);