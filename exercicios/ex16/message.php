<?php
require('action.php');

$errors = [];
$data = [];

if(empty($_POST['nums'])){
    $errors['num'] = "Informe um número";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['par'] = par($_POST['nums']);
    $data['impar'] = impar($_POST['nums']);
}

echo json_encode($data);