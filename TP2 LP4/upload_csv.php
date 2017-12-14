<?php
include 'CRUD_product.php';
session_start();
header("location: home_empresa.php")

$file = fopen($_FILES["produtocsv"]["tmp_name"], "r");
$i = 1;

$cnpj = $_SESSION["cnpj"];

$query = "SELECT cd_product FROM product WHERE cd_cnpj = '$cnpj' ORDER BY cd_product DESC LIMIT 1";

while (($data = fgetcsv($file, "30000", ";")) != FALSE ) {
	$num = count($data);
	if(mysqli_query(getConnection(), $query)) 
		$code = mysqli_fetch_assoc(mysqli_query(getConnection(), $query))['cd_product'] + 1;
	else
		$code = 0;
	for($x = 0; $x < $num; $x = $x + 3) {
		InsertProduct($cnpj, $code, $data[$x], $data[$x+1], $data[$x+2]);
	}
}

?>