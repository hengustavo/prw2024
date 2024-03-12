<?php
    $salario = floatval(readline());
    if($salario>=0 && $salario<=2000.00){
    print "Isento\n";
    }
    elseif($salario<=3000.00){
    print "R$ ".number_format((($salario- 2000)*0.08), 2, ".", "")."\n";
    }
    elseif($salario<=4500.00){
    print "R$ ".number_format((($salario- 3000)*0.18 + 1000*0.08), 2, ".", "")."\n";
    }
    else
    {
    print "R$ ".number_format((($salario- 4500)*0.28 + 1000*0.08+ 1500*0.18), 2, ".", "")."\n";
    }
?>