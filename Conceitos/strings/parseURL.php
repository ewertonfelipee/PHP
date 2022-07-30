<?php

  $url = "https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964#questions";
  $arrayURL = parse_url($url);
  print_r($arrayURL);
  echo "<br>";
  echo $arrayURL["scheme"];
  echo "<br>";
  echo $arrayURL["host"];
  echo "<br>";
  echo $arrayURL["path"];
  echo "<br>";
  echo $arrayURL["fragment"];