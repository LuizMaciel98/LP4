<?php
//include 'config.php';

function InsertVenda($cnpj, $cd, $cliente, $vl_total, $dt) {
	$con = getConnection();
	$query = "INSERT INTO sale VALUES(?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($con, $query);
	mysqli_stmt_bind_param($stmt, "isdss", $cd, $cnpj, $vl_total, $dt, $cliente);
	mysqli_execute($stmt);
}

function InsertItemVenda($cdvenda, $cnpj, $cdprod, $qnt) {
	$con = getConnection();
	$query = "INSERT INTO sale_product VALUES(?, ?, ?, ?)";
	$stmt = mysqli_prepare($con, $query);
	mysqli_stmt_bind_param($stmt, "siii", $cnpj, $cdvenda, $cdprod, $qnt);
	mysqli_execute($stmt);
}
?>