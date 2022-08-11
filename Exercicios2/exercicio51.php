<?php

  $arr = [
    "ewerton" => 24,
    "matheus" => 30,
    "felipe" => 21
  ];

  arsort($arr);
?>
<h3><strong>listacom nomes e pontuacoes</strong><h3>
  <ol>
    <?php foreach($arr as $name => $points): ?>
        <li><?= $name; ?> -> <?= $points; ?> pontos</li>
    <?php endforeach; ?>
  </ol>
