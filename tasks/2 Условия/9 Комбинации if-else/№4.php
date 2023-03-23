<?php
    $num = 99;
    
    if ($num >= 10 || $num <= 99)
    {
      $result = $num % 10 + floor($num / 10);
      if ($result <= 9)
      {
          echo 'однозначна';
      }
      else
      {
          echo 'двузначна';
      }
    }
    else {
        echo 'ошибка, больше 99 или меньше 10';
    }
?>