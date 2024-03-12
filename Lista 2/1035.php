<?php

    $linha = explode(" ", readline());
    $a = $linha[0];
    $b = $linha[1];
    $c = $linha[2];
    $d = $linha[3];
    
    if($b > $c and $d > $a and ($c + $d) > ($a + $b) and $c > 0 and $d > 0 and $a % 2 == 0) 
    {
        echo "Valores aceitos\n";
    }
    else 
    {
        echo "Valores nao aceitos\n";
    }

?>