<?php
include 'config.php';

//cnpj, name, password, phone, email

//INSERT
function InsertCompany($cnpj, $name, $password, $phone, $email) {
	$con = getConnection();
	$query = "INSERT INTO company VALUES(?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($con, $query);
	mysqli_bind_param($stmt, "sssss", $cnpj, $name, $password, $phone, $email);
	mysqli_execute($stmt);
}

//SELECTS
function SelectCompanys() {
	$con = getConnection();
	$query = "SELECT * FROM company";
	return mysqli_query($query);
}
function SelectUserByCnpj($cnpj) {
	$con = getConnection();
	$query = "SELECT * FROM company WHERE cd_cnpj = $cnpj";
	return mysqli_query($query);
}
function SelectUserByName($name) {
	$con = getConnection();
	$query = "SELECT * FROM company WHERE nm_company = $name";
	return mysqli_query($query);
}

//UPDATES
function UpdateCompany($old_cnpj, $name, $cnpj, $password, $phone, $email) {
	$con = getConnection();
	$query = "UPDATE company SET cd_cnpj = ?, nm_company = ?, cd_password = ?, cd_phone = ?, nm_email = ? WHERE cd_cnpj = ?";
	$stmt = mysqli_prepare($con, $query);
	mysqli_bind_param($stmt, "ssssss", $cnpj, $name, $password, $phone, $email, $old_cnpj);
	mysqli_execute($stmt);
}
function UpdateCompanyCnpj($old_cnpj, $new_cnpj) {
	$con = getConnection();
	$query = "UPDATE company SET cd_cnpj = ? WHERE cd_cnpj = ?";
	$stmt = mysqli_prepare($con, $query);
	mysqli_bind_param($stmt, "ss", $new_cnpj, $old_cnpj);
	mysqli_execute($stmt);
}
function UpdateCompanyName($cnpj, $new_name) {
	$con = getConnection();
	$query = "UPDATE company SET nm_company = ? WHERE cd_cnpj = ?";
	$stmt = mysqli_prepare($con, $query);
	mysqli_bind_param($stmt, "ss", $new_name, $cnpj);
	mysqli_execute($stmt);
}
function UpdateCompanyPassword($cnpj, $new_password) {
	$con = getConnection();
	$query = "UPDATE company SET cd_password = ? WHERE cd_cnpj = ?";
	$stmt = mysqli_prepare($con, $query);
	mysqli_bind_param($stmt, "ss", $new_name, $cnpj);
	mysqli_execute($stmt);
}
function UpdateCompanyPhone($cnpj, $new_phone) {
	$con = getConnection();
	$query = "UPDATE company SET nm_company = ? WHERE cd_cnpj = ?";
	$stmt = mysqli_prepare($con, $query);
	mysqli_bind_param($stmt, "ss", $new_name, $cnpj);
	mysqli_execute($stmt);

}
function UpdateCompanyEmail($cnpj, $new_email) {

}

//DELETE
function DeleteCompany($cnpj) {

}
?>