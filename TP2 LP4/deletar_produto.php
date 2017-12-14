<?php
include 'CRUD_product.php';
session_start();
    
if(isset($_SESSION['cnpj'])){
    header("Location: home.php");
}


$cnpj = $_SESSION['cnpj'];
$nome = $_POST["nomeProduto"];

DeleteProducts($nome, $cnpj);
header('Location: home_empresa.php');
?>