<?php
include_once 'config.php';

//cnpj, code, name, amount, price

//INSERT
function InsertProduct($cnpj, $code, $name, $amount, $price) {
	$con = getConnection();
	$query = "INSERT INTO product VALUES(?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($con, $query);
	mysqli_stmt_bind_param($stmt, "issid", $code, $cnpj, $name, $amount, $price);
	mysqli_execute($stmt);
}

//SELECTS
function SelectProducts($cnpj) {
	$con = getConnection();
	$query = "SELECT * FROM product WHERE cd_cnpj ='" .$cnpj. "'";
	return mysqli_query($con, $query);
}
function SelectProductByCode($cnpj, $code) {
	$con = getConnection();
	$query = "SELECT * FROM product WHERE cd_cnpj = $cnpj AND cd_product = $code";
	return mysqli_query($con, $query);
}
function SelectProductName($cnpj, $name) {
	$con = getConnection();
	$query = "SELECT * FROM product WHERE cd_cnpj = $cnpj AND nm_product = $name";
	return mysqli_query($con, $query);
}

//UPDATES
function UpdateProductByCode($cnpj, $code, $newName, $newAmount, $newPrice) {
	$con = getConnection();
	$query = "UPDATE product Set nm_product = ?, qt_product = ?, vl_product = ? WHERE cd_cnpj = ? AND cd_product = ?";
	$stmt = mysqli_prepare($con, $query);
	mysqli_stmt_bind_param($stmt, "sidsi", $newName, $newAmount, $newPrice, $cnpj, $code);
	mysqli_execute($stmt);
}
//DELETE
function DeleteProducts($nome, $cnpj) {
    $con = getConnection();
    $query = "DELETE FROM product WHERE nm_product=? AND cd_cnpj=?";
    $stmt = mysqli_prepare($con, $query);
	mysqli_stmt_bind_param($stmt, "ss",$nome, $cnpj);
	mysqli_execute($stmt);
}
?>