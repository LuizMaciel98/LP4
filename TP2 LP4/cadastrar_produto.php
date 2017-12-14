<?php
//include 'config.php';
session_start();
include 'CRUD_product.php';
$cnpj = $_SESSION['cnpj'];
$code;
$query = "SELECT cd_product FROM product WHERE cd_cnpj = '".$cnpj."' ORDER BY cd_product DESC LIMIT 1";

if(mysqli_query(getConnection(), $query)) 
	$code = mysqli_fetch_assoc(mysqli_query(getConnection(), $query))['cd_product'] + 1;
else
	$code = 0;

$name = $_GET["name"];
$qnt = $_GET["qnt"];
$price = $_GET["price"];
echo "$cnpj \n $code \n $qnt \n $price \n $name";
echo InsertProduct($cnpj, $code, $name, $qnt, $price);

?>