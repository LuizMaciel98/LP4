<?php
    session_start();
    session_destroy();
    setcookie("cnpj", $_SESSION['cnpj'], time() - 3600, "/");
    setcookie("pass", $_SESSION['pass'], time() - 3600, "/");
    setcookie("name", $_SESSION['companyName'], time() - 3600, "/");

    header("Location: ../home.php");
?>
