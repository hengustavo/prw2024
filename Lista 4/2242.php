<?php
    $vogais = trim(readline());
    $conso = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
    $n = str_replace($conso, "", $vogais);

    if($n == strrev($n))
    {
        print "S\n";
    } 
    else 
    {
        print "N\n";
    }
?>