<?php

  $arr = [
    "ewerton" => 24,
    "role" => "student",
    "language" => "Portuguese"
  ];

  echo json_encode($arr);
  echo "<br><br>";

  $a = var_dump(json_decode(json_encode($arr)));
  echo $a;