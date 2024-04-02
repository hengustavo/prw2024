<?php
    list($m, $n) = explode(" ", readline());
    while ($m != 0 && $n != 0)
    {
    $m += $n;
    $m = str_replace('0', "", strval($m));
    print "$m\n";
    list($m, $n) = explode(" ", readline());
    }
?>