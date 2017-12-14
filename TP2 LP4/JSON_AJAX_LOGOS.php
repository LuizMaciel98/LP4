<?php
include 'config.php';

$logos = array();
$i = 0;

$con = getConnection();
$query = "SELECT nm_company FROM company ORDER BY cd_cnpj DESC LIMIT 4";
$results = mysqli_query($con, $query);

while ($lin = mysqli_fetch_assoc($results)) {
	$logos[$i] = $lin['nm_company'];
	$i++;
}
echo json_encode($logos);

?>