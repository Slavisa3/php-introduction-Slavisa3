<?php
  $arr = array('18.2', 102, '12', 125, 55.5, '16');
  foreach ($arr as $broj) {
      if (is_int($broj)) {
          echo "The array $broj is integer.<br>";
      } else {
          echo "The array $broj  can accept only integer.<br><br>";
      }
  }
    echo (max($arr));
