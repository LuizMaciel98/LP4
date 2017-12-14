<?php
header("Location: home_empresa.php");
include 'CRUD_product.php';
session_start();
    
if(!isset($_SESSION['cnpj'])){
    header("Location: home.php");
}


$cnpj = $_SESSION['cnpj'];
$nome = $_GET["nomeProduto"];

DeleteProducts($nome, $cnpj);


?>