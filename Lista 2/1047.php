<?php
    list($a, $b, $c, $d) = explode(' ', readline());

    if($a == $c and $b == $d)
    {
    print "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
    }
    elseif($a < $c and $b < $d)
    {
    $dif = $c -$a; 
    $difm = $d - $b;
    print "O JOGO DUROU $dif HORA(S) E $difm MINUTO(S)\n";
    }
    elseif($a < $c and $b == $d)
    {
    $dif = $c -$a; 
    print "O JOGO DUROU $dif HORA(S) E 0 MINUTO(S)\n";
    }
    elseif($a < $c and $b > $d)
    {
    $dif = ($c -$a) - 1; 
    $difm = 60- ($b -$d);
    print "O JOGO DUROU $dif HORA(S) E $difm MINUTO(S)\n";
    }
    elseif($a > $c and $b> $d)
    {
    $dif = (24-$a +$c) - 1;
    $difm = 60- ($b -$d);
    print "O JOGO DUROU $dif HORA(S) E $difm MINUTO(S)\n";
    }
    elseif($a > $c and $b == $d)
    {
    $dif = (24-$a +$c);
    print "O JOGO DUROU $dif HORA(S) E 0 MINUTO(S)\n";
    }
    elseif($a > $c and $b < $d)
    {
    $dif = (24-$a +$c);
    $difm = $d - $b;
    print "O JOGO DUROU $dif HORA(S) E $difm MINUTO(S)\n";
    }
    elseif($a == $c and $b < $d)
    {
    $difm = $d - $b;
    print "O JOGO DUROU 0 HORA(S) E $difm MINUTO(S)\n";
    }
    elseif($a == $c and $b > $d)
    {
    $difm = 60- ($b -$d);
    print "O JOGO DUROU 23 HORA(S) E $difm MINUTO(S)\n";
    }
?>