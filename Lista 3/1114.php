<?php
    $senha = false;
    while (!$senha) {
    if (intval(readline()) == 2002) {
        print "Acesso Permitido\n";
        $senha = true;
    } else
        print "Senha Invalida\n";
}
?>