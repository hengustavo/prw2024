<?php
    $n = intval(fgets(STDIN));
    for ($i = 0; $i < $n; $i++)
    {
        $pessoas = intval(fgets(STDIN));
        $idiomas = array();
        for ($j = 0; $j < $pessoas; $j++)
        {
            $idioma = trim(fgets(STDIN));
            if (array_key_exists($idioma, $idiomas))
            {
                $idiomas[$idioma]++;
            } 
            else
            {
                $idiomas[$idioma] = 1;
            }
        }
    if (count($idiomas) >= 2)
    {
        print "ingles\n";
    }
    else
        {
            arsort($idiomas);
            print key($idiomas) . "\n";
        }
    }
?>