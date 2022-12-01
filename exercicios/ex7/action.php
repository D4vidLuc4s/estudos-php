<?php

function returnBook($book, $choose) {
    $today = date("d");

    if ($_POST['choose'] == 'prof') {
        $today = $today + 10;
        $result = "O livro $book deverá ser devolvido no dia $today";
    } else {
        $today = $today + 3;
        $result = "O livro $book deverá ser devolvido no dia $today";
    }
    return $result;
}
