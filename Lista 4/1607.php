<?php
    function min_operacoes($a, $b)
    {
        $n = strlen($a);
        $ops = 0;
        for ($i = 0; $i < $n; $i++)
        {
            $diff = ord($b[$i]) - ord($a[$i]);
            
            if ($diff <0)
            {
                $diff += 26;
            }
            $ops += $diff;
        }
        return $ops;
    }
    
    $Teste =intval(fgets(STDIN));
    
    for($i =0; $i < $Teste; $i++)
    {
    //LER DUAS STRINGS
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    
    print min_operacoes($a, $b) . PHP_EOL;
    }
?>