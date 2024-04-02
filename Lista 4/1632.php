<?php
    $n = intval(readline());
    for($i = 0; $i < $n; $i++)
    {
        $letras = str_split(readline());
        $combi = 1;
        foreach ($letras as $letra)
        {
            if(in_array(strtoupper($letra),['A', 'E','I','O','S']))
            $combi *= 3;
            else 
                $combi *= 2;
        }
        print "$combi\n";
    }
?>