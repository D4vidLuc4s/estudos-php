<?php

function calcHeight(){
    $chico = 1.50;
    $juca = 1.10;
    $year = 0;

    while ($juca <= $chico) {
        $chico = $chico + 0.02;
        $juca = $juca + 0.03;
        $year++;
    }
    return $year;
}