<?php
    $n = intval(readline());
    for ($i = 0; $i < $n; $i++)
    {
    $re = "";
    $RA = str_split(readline());
    if (count($RA) < 20)
        $re = "INVALID DATA\n";
    else
    {
        $RAa = implode("", array_slice($RA, 0, 2));
        if ($RAa != "RA")
            $re = "INVALID DATA\n";
        else
        {
            $di = implode("", array_slice($RA, 2, 18));
            $re = intval($di) . "\n";
        }
    }
    print $re;
    }
?>