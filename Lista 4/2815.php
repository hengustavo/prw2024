<?php
    $papalavra = explode(" ", readline());
    for ($i = 0; $i < count($papalavra); $i++)
    {
        if (strlen($papalavra[$i]) >= 4)
            if (substr($papalavra[$i], 0, 2) == substr($papalavra[$i], 2, 2))
                $papalavra[$i] = substr($papalavra[$i], 2);
    }
    print implode(" ", $papalavra) . "\n";
?>