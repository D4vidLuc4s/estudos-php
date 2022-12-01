<?php
require('action.php');

$errors = [];
$data = [];

if (empty($_POST['num'])){
    $errors['num'] = 'Informe um número inteiro a partir de 1.';
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['repetition'] = repeat($_POST['num']);
}

echo json_encode($data);