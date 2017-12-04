<?php

if(!isset($_SESSION["cnpj"])) {
	include 'navbar_deslogada.php';
}
else
	include 'navbar_logada.php';
?>
