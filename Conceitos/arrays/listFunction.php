<?php

  //  first form
  $varList = list($name, $age, $role) = $person;
  $namePerson = $person.$name = "ewerton";
  echo "$namePerson<br>";
  $agePerson = $person.$age = 24;
  echo "$agePerson<br>";
  $rolePerson = $person.$role = "student";
  echo "$rolePerson<br>";

  //  better form
  $person1 = ["ewerton", 24, "student"];
  list($name1, $age1, $role1) = $person1;
  echo "$name1<br>";
  echo "$age1<br>";
  echo "$role1<br>";