<?php
    $in = array_map('floatval', explode(' ', readline()));
    
    rsort($in);
    //print_r($in);
    
    $A = $in[0];
    $B = $in[1];
    $C = $in[2];
    
    if ($A >= $B + $C) {
        echo "NAO FORMA TRIANGULO\n";
    } else {
        if (($A * $A) == ($B * $B) + ($C * $C)) {
            echo "TRIANGULO RETANGULO\n";
        }
        if (($A * $A) > ($B * $B) + ($C * $C)) {
            echo "TRIANGULO OBTUSANGULO\n";
        }
        if (($A * $A) < ($B * $B) + ($C * $C)) {
            echo "TRIANGULO ACUTANGULO\n";
        }
        if ($A == $B && $B == $C) {
            echo "TRIANGULO EQUILATERO\n";
        }
        if (($A == $B && $B != $C) || ($A == $C && $C != $B) || ($B == $C && $C != $A)) {
            echo "TRIANGULO ISOSCELES\n";
        }
    }
?>