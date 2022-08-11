<?php

  /* Com a função shuffle podemos reorganizar os itens em ordem aleatória;
  itens em ordem aleatória;
  Temos um array retornado em ordem aleatória;
  */

  $arr = [1,3,4,5,6];
  shuffle($arr);
  print_r($arr);

  shuffle($arr);
  echo "<br>";
  print_r($arr);