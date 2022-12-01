<?php

require('action.php');

$errors = [];
$data = [];

if (empty($_POST['book'])){
    $errors['book'] = "Informe um livro";
}
if ($_POST['choose'] != "aluno" && $_POST['choose'] != "prof"){
    $errors['choose'] = "Informe um cargo válido";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['retorno'] = returnBook($_POST['book'], $_POST['prof']);
}

echo json_encode($data);