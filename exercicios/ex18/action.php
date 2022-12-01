<?php
function diferenca($grupoUm, $grupoDois){
    $n1 = explode(" ", $grupoUm);
    $n2 = explode(" ", $grupoDois);

    $diffUm = array_diff($n1, $n2);
    $diffDois = array_diff($n2, $n1);

    $juncao = array_merge($diffUm, $diffDois);
    $result = implode(" ", $juncao);

    return $result;
}

