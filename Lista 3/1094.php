<?php
    $x = intval(readline());
    list($c, $r, $s) = 0;
    for($i=0; $i<$x; $i++){
    list($a, $b) = explode(" ", readline());
    if($a>=1 and $a<=15){
        if($b == 'C')
        {
            $c = $c + $a;
        }
        elseif($b == 'R')
        {
            $r = $r + $a;
        }
            else
            {
                $s = $s + $a;
            }
        }
    }
    $total = $c + $r + $s;
    print "Total: $total cobaias\n"."Total de coelhos: $c\n"."Total de ratos: $r\n"."Total de sapos: $s\n";
    print "Percentual de coelhos: ".number_format(($c*100)/($total), 2, ".", " ")." %\n";
    print "Percentual de ratos: ".number_format(($r*100)/($total), 2, ".", " ")." %\n";
    print "Percentual de sapos: ".number_format(($s*100)/($total), 2, ".", " ")." %\n";
?>