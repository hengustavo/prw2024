<?php
    $n = intval(readline());
    $r = [];
    for ($i = 0; $i < $n; $i++)
    {
        $X = intval(readline());
        if ($X == 0)
            $string = "NULL\n";
        else 
        {
        if ($X % 2 == 0)
            $string = "EVEN";
        else
            $string = "ODD";
        if ($X > 0)
            $string .= " POSITIVE\n";
        else
            $string .= " NEGATIVE\n";
        }
            array_push($r, $string);
    }
        foreach ($r as $r)
        {
            print $r;
        }
?>