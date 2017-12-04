<?php


include '../CRUD_company.php';

session_start();

$login = $_POST['cnpjEmpresa'];
$pass = $_POST['senhaEmpresa'];
$name = mysqli_fetch_array(SelectLoginCompanyName($login));


$result = SelectLoginAndPass($login, $pass);

if(mysqli_num_rows($result) > 0 ){
    $_SESSION['cnpj'] = $login;
    $_SESSION['pass'] = $pass;
    $_SESSION['companyName'] = $name[0];
    header('Location: ../home.php');


}
else{
    header('Location: ../home.php');
}

?>
