<?php
    $n = intval(readline());
    $par = 0;
    for($i = 1; $i <= $n ; $i++)
    {
        if($i % 2 == 0)
        {
          $par = $i * $i; 
          print $i . "^2 = " . $par . "\n";
        }
    }
?>