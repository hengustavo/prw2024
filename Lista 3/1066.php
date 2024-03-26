<?php
    $a =0;
    $b =0;
    $c =0;
    $d =0;
        for ($i = 1; $i <= 5; $i++)
    {
        $x = floatval(readline());
        if ($x%2==0)
        {
            $a+=1;
        }
        else
        {
            $b+=1;
        }
        if ($x>0)
        {
            $c+=1;
        }
        if ($x<0)
        {
            $d+=1;
        }
    }
    print "$a valor(es) par(es)\n"."$b valor(es) impar(es)\n"."$c valor(es) positivo(s)\n"."$d valor(es) negativo(s)\n";
?>