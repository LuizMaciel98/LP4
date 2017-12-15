<?php
include 'CRUD_venda.php';
include 'CRUD_product.php';
header("location: home_empresa.php");
session_start();

$cnpj = $_SESSION['cnpj'];

//gerar codigo da venda
$query = "SELECT cd_sale FROM sale WHERE cd_cnpj = '".$cnpj."' ORDER BY cd_sale DESC LIMIT 1";

if(mysqli_query(getConnection(), $query)) 
	$code = mysqli_fetch_assoc(mysqli_query(getConnection(), $query))['cd_sale'] + 1;
else
	$code = 0;
$data = date("Y-m-d");

//cadastrar venda
InsertVenda($cnpj, $code, $_GET['nomeComprador'], $_GET['vendaTotal'], $data);

foreach ($_GET['produto'] as $key => $value) {
	$productcode = mysqli_fetch_assoc(SelectProductName($cnpj, $value))['cd_product'];
	InsertItemVenda($code, $cnpj, $value, $_GET['quant'][$key]);

	//remover produtos do estoque
	$newQnt = mysqli_fetch_assoc(SelectProductByCode($cnpj, $productcode))['qt_product'];
	$newQnt = $newQnt - $_GET['quant'][$key];
	UpdateProductAmountByCode($cnpj, $productcode, $newQnt);

}
?>