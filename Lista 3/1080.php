<?php
    $p = 0;
    $n = 0;
    for ($i = 1; $i <= 100; $i++) {
        $v = intval(readline());
        if ($n < $v) {
            $n = $v;
            $p = $i;
        }
    }
    print "$n\n";
    print "$p\n";
?>