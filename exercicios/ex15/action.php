<?php

function calcMassa($massa){
    $perda = $massa * 0.25;
    $seconds = 0;
    $minutes = 0;
    $hour = 0;
    while ($massa >= 0.10){
        $massa = $massa - $perda;
        $seconds = $seconds + 30;
        if ($seconds > 59){
            $seconds = "00";
            $minutes++;
        }
    }
    $time = "$minutes:$seconds";
    return $time;
}