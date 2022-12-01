<?php

function multipleWord($word){
    for ($i = 1; $i <= 4; $i++) {
        $repeatWord[] = str_repeat("$word ", $i) . "<br>";
    }
    return $repeatWord;
}