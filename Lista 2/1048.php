<?php
    $salario = floatval(readline());
    if($salario>0 && $salario<=400.00)
    {
    print "Novo salario: ".number_format(($salario+($salario*0.15)), 2, ".", "")."\nReajuste ganho: ".number_format(($salario*0.15), 2, ".", "")."\nEm percentual: 15 %\n";
    }
    elseif($salario<=800.00)
    {
    print "Novo salario: ".number_format(($salario+($salario*0.12)), 2, ".", "")."\nReajuste ganho: ".number_format(($salario*0.12), 2, ".", "")."\nEm percentual: 12 %\n";
    }
    elseif($salario<=1200.00)
    {
    print "Novo salario: ".number_format(($salario+($salario*0.10)), 2, ".", "")."\nReajuste ganho: ".number_format(($salario*0.10), 2, ".", "")."\nEm percentual: 10 %\n";
    } 
    elseif($salario<=2000.00)
    {
    print "Novo salario: ".number_format(($salario+($salario*0.07)), 2, ".", "")."\nReajuste ganho: ".number_format(($salario*0.07), 2, ".", "")."\nEm percentual: 7 %\n";
    }
    else
    {
    print "Novo salario: ".number_format(($salario+($salario*0.04)), 2, ".", "")."\nReajuste ganho: ".number_format(($salario*0.04), 2, ".", "")."\nEm percentual: 4 %\n";
    }
?>