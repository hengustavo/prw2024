<?php
    $n= intval(readline());
    for($i = 1; $i <= 10000; $i++){
        $z = $i % $n;
        if ($z==2)
        {
            printf($i."\n");
        }
    }
?>