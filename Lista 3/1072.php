<?php
    $a = intval(readline());
    $b = 0;
    $c = 0;
    for($i=0; $i<$a; $i++)
    {
    $d = intval(readline());
    if($d>=10 and $d<=20)
        {
            $b++;
        }
    else
        {
            $c++;
        }
    }
    print "$b in\n"."$c out\n";
?>