<?php
    $grenais = $inter_vitorias = $gremio_vitorias = $empates = 0;

    do
    {
        list($interg, $gremiog) = explode(" ", fgets(STDIN));
    
        if ($interg > $gremiog)
        {
            $inter_vitorias++;
        } 
    elseif ($gremiog > $interg)
        {
            $gremio_vitorias++;
        } 
    else 
        {
            $empates++;
        }
    
        $grenais++;
        
    do {
            print "Novo grenal (1-sim 2-nao)\n";
            $opcao = intval(fgets(STDIN));
        } 
        while ($opcao != 1 && $opcao != 2);
    }
    while ($opcao == 1);

    print $grenais . " grenais\n";
    print "Inter:" . $inter_vitorias . "\n";
    print "Gremio:" . $gremio_vitorias . "\n";
    print "Empates:" . $empates . "\n";

    if ($inter_vitorias > $gremio_vitorias)
    {
        print "Inter venceu mais\n";
    } 
    elseif ($gremio_vitorias > $inter_vitorias)
    {
        print "Gremio venceu mais\n";
    }
    else
    {
        print "Nao houve vencedor\n";
    }
?>