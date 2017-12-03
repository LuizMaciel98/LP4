<?php
include 'config.php';

//cnpj, code, name, amount, price

//INSERT
function InsertProduct($cnpj, $code, $name, $amount, $price) {
	$con = getConnection();
	$query = "INSERT INTO product VALUES(?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($con, $query);
	mysqli_bind_param($stmt, "issss", $code, $cnpj, $name, $amount, $price);
	mysqli_execute($stmt);
}

//SELECTS
function SelectProducts($cnpj) {
	$con = getConnection();
	$query = "SELECT * FROM product WHERE cd_cnpj = $cnpj";
	return mysqli_query($query);
}
function SelectProductByCode($cnpj, $code) {
	$con = getConnection();
	$query = "SELECT * FROM product WHERE cd_cnpj = $cnpj AND cd_product = $code";
	return mysqli_query($query);
}

//UPDATES

?>