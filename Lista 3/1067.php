<?php
    $n=intval(readline());
    if ($n >= 1 and $n<=1000){
    for($i = 1; $i <= $n; $i++){
        if($i%2 == 1){
            print_r($i."\n");
            }
        }
    }
?>