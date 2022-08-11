<?php

  $arr = [
    "ewerton" => 24,
    "matheus" => 30,
    "felipe" => 21
  ];
?>
<h3><strong>Tabela com nomes e idades</strong><h3>
<table border="1px">
  <tr>
    <th>Nome</th>
    <th>idade</th>
  </tr>
  <?php foreach($arr as $name => $ages): ?>
      <tr>
        <td><?= $name; ?></td>
        <td><?= $ages; ?></td>
      </tr>
  <?php endforeach; ?>
</table>
