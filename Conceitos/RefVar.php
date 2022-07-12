<?php

    $x = 4;
    echo "aqui eh o x: $x <br>";
    $y = &$x;
    echo "aqui eh o y q referencia x: $y <br>";
    $y = 52;
    echo "aqui eh o x depois de y receber o novo valor: $x <br>";
    echo "aqui eh y: $y";