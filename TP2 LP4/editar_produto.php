<?php
include 'CRUD_product.php';
header('location: home_empresa.php');
session_start();

print_r($_GET);
$cnpj = $_SESSION['cnpj'];
$cd = $_GET['cd'];
$newName = $_GET['NovoNome'];
$newAmount = $_GET['NovaQuantidade'];
$newPrice = $_GET['NovoPreco'];

UpdateProductByCode($cnpj, $cd , $newName, $newAmount, $newPrice);


?>