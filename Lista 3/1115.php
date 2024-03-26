<?php
    list($x, $y) = explode(" " , readline());
    
    while($x != 0 and $y != 0)
    {
        if($x > 0 and $y > 0)
        {
           print "primeiro\n";
        }
        else if($x < 0 and $y > 0)
        {
           print "segundo\n";
        }
        else if($x < 0 and $y < 0)
        {
           print "terceiro\n";
        }
        else if($x > 0 and $y < 0)
        {
           print "quarto\n";
        }
        list($x, $y) = explode(" " , readline());
    }
?>