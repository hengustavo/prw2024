<?php
    $n = intval(readline());
    $j = 1;
    if (1 < $n and $n < 1000)
    {
    for ($i=0 ;$i<$n ;$i++)
        {
            $x = $j**2;
            $y = $j**3;
            print "$j "."$x "."$y\n";
            $j = $j + 1;
        }
    }
?>