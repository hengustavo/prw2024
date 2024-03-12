<?php
    function vertebrado($tipo1, $tipo2)
    {
        if($tipo1 == "ave")
        {
            if($tipo2 == "carnivoro")
            {
                print "aguia\n";
            }
            else
            {
                print "pomba\n";
            }
        }
        else
        {
            if($tipo2 == "onivoro")
            {
                print "homem\n";
            }
        else
            {
            print "vaca\n";
            }
        }
    }

    function invertebrado($tipo1, $tipo2)
    {
        if($tipo1 == "inseto")
        {
            if($tipo2 == "hematofago")
            {
                print "pulga\n";
            }
            else
            {
                print "lagarta\n";
            }
        }
        else
        {
            if($tipo2 == "hematofago")
            {
                print "sanguessuga\n";
            }
            else
            {
                print "minhoca\n";
            }
        }
    }

    $tipo = readline();
    $tipo1 = readline();
    $tipo2 = readline();

    if($tipo == "vertebrado")
    {
    vertebrado($tipo1,$tipo2);
    }
    else
    {
    invertebrado($tipo1,$tipo2);
    }
?>