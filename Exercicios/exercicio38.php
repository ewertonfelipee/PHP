<?php

  $arr = ["bread","beer","cheese"];

  function market($vetor){
    $str = "vc levou estes itens do mercado: ";
    for($i = 0; $i < count($vetor); $i++) {
      if($i + 1 == count($vetor)) {
        $str .= "$vetor[$i].";
      } else {
        $str .= "$vetor[$i], ";
      }
    }
    return $str;
  }

  echo market($arr);
?>