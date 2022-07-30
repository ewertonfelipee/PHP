<?php

  echo "before removes tags";
  $textHTML = "<p>sdfsfsdf</p><div>sdfsdfsdfsfsdf</div><p>dsfsfsfs</p>";
  echo "$textHTML <br>";

  echo "after removes tag <br>";
  $strip_tag = strip_tags($textHTML);
  echo "$strip_tag <br>";