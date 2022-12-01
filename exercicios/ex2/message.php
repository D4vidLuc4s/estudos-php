<?php

require('action.php');

$errors = [];
$data = [];

if (empty($_POST['num'])) {
    $errors['num'] = 'Um número é obrigatório.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['result'] = calculo($_POST['num']);
}

echo json_encode($data);