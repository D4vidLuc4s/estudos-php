<?php

require('action.php');

$errors = [];
$data = [];

if (empty($_POST['mes'])){
    $errors['mes'] = "Um número é obrigatório";
}
if ($_POST['mes'] < 1 && $_POST['mes'] > 12){
    $errors['mes'] = "Informe um número entre 1 e 12";
}

if (!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['month'] = showMonth($_POST['mes']);
}

echo json_encode($data);