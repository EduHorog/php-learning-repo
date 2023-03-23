<?php
    $num = 1;
    
    if ($num > 0)
    {
      if ($num <= 10) {
          echo 1;
      }

      else if ($num <= 20) {
          echo 2;
      }

      else if ($num <= 31) {
          echo 3;
      }

      else {
          echo 'error';
      }
    }
    else {
        echo 'error';
    }
?>