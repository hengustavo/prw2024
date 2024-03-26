<?php
    $n = intval(readline());
    if($n%2==0)
    {
        $n-=1;
        for($i = 0;$i <6; $i++)
        {
            $n+=2;
        print $n."\n";
        }
    }
    else
    {
        print $n."\n";
        for($i = 0;$i <5; $i++)
        {
        $n+=2;
        print $n."\n";
        }
    }
?>