<?php


include '../CRUD_company.php';

session_start();


$login = $_POST['cnpjEmpresa'];
$pass = $_POST['senhaEmpresa'];
$manter = $_POST['manterConectado'];
$name = mysqli_fetch_array(SelectLoginCompanyName($login));


$result = SelectLoginAndPass($login, $pass);

if(mysqli_num_rows($result) > 0 ){
    $_SESSION['cnpj'] = $login;
    $_SESSION['pass'] = $pass;
    $_SESSION['companyName'] = $name[0];
    
    if($manter == "manter"){
        setcookie("cnpj", $_SESSION['cnpj'], time() + (86400 * 30), "/");
        setcookie("pass", $_SESSION['pass'], time() + (86400 * 30), "/");
        setcookie("name", $_SESSION['companyName'], time() + (86400 * 30), "/");
    }
    
    header('Location: ../home.php');
}
else{
    header('Location: ../home.php');
}

?>
