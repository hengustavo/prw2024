<?php
    $n= intval(readline());
    $n2 = intval(readline());
    $soma = 0;
    $n2++;
    while ($n2 < $n)
    {
        if ($n2 % 2 != 0)
            $soma += $n2;
        $n2++;
    }
    print $soma . "\n";
    