<?php
header('Location: home.php');
include 'CRUD_company.php';
$cnpj = $_POST["cnpj"];
$name = $_POST["name"];
$password = $_POST["pass"];
$phone = $_POST["phone"];
$email = $_POST["email"];

InsertCompany($cnpj, $name, $password, $phone, $email);
//print_r($_POST);
//print_r($_FILES);
$target_dir = "logos/";
$target_file = $target_dir . $name . "." . basename($_FILES["logo"]["type"]);
move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
?>