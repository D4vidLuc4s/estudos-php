<?php

function calculo($num)
{
    $div = ['2', '5', '10'];

    if ($num % 2 == 0 && $num % 5 == 0 && $num % 10 == 0) {
        $result = ["$div[0], $div[1], $div[2]"];
    } else if ($num % 5 == 0 && $num % 10 == 0) {
        $result = ["$div[1], $div[2]"];
    } else if ($num % 2 == 0 && $num % 10 == 0) {
        $result = ["$div[0],$div[2]"];
    } else if ($num % 2 == 0 && $num % 5 == 0) {
        $result = ["$div[0],$div[1]"];
    } else if ($num % 2 == 0) {
        $result = [$div[0]];
    } else if ($num % 5 == 0) {
        $result = [$div[1]];
    } else {
        $result = 'Não é divisivel por 2, 5 e 10';
    }
    return $result;
}
