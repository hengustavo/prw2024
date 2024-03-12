<?php

    list($cod, $qtd) = explode(" ", readline());
    $total = 0;
    if($cod == 1)
    {
        $total = $qtd * 4;   
    }
    else if($cod == 2)
    {
       $total = $qtd * 4.5; 
    }
    else if ($cod == 3) 
    {
        $total =  $qtd * 5;
    }
    else if ($cod == 4)
    {
        $total =  $qtd * 2;
    }
    else if ($cod == 5)
    {
        $total = $qtd * 1.5;
    }
    echo "Total: R$ ".number_format($total,2,".","")."\n";
?>