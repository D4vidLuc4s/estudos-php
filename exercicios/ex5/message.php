<?php

require('action.php');

$errors = [];
$data = [];

if (empty($_POST['ab'])){
    $errors['ab'] = "Informe um número!";
}
if (empty($_POST['bc'])){
    $errors['bc'] = "Informe um número!";
}
if (empty($_POST['ca'])){
    $errors['ca'] = "Informe um número";
}

if (!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['triangulo'] = triangleType($_POST['ab'], $_POST['bc'], $_POST['ca']);
}

echo json_encode($data);

