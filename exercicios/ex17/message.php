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
    $data['maior'] = maior($_POST['nums']);
    $data['menor'] = menor($_POST['nums']);
    $data['med'] = media($_POST['nums']);
    $data['porcen'] = porcen($_POST['nums']);
}

echo json_encode($data);