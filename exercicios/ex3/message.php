<?php

require('action.php');

$errors = [];
$data = [];

if (empty($_POST['nome'])) {
    $errors['nome'] = "Um nome é obrigatório";
}
if (empty($_POST['idade'])) {
    $errors['idade'] = "Idade é obrigatório";
}
if($_POST['idade'] >= 25) {
    $errors['idade'] = "Precisa ter menos que 25 anos";
}
if (empty($_POST['genero'])) {
    $errors['genero'] = "Gênero é obrigatório";
}
if ($_POST['genero'] == 'M') {
    $errors['genero'] = "Precisa ser mulher";
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['status'] = "Rejeitado";
    $data['errors'] = $errors;
    $data['username'] = checkinResult($_POST['name']);
} else {
    $data['success'] = true;
    $data['status'] = "Aprovado!";
    $data['username'] = checkinResult($_POST['name']);
}

echo json_encode($data);