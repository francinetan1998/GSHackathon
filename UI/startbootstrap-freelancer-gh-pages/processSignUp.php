<?php

require_once 'include/common.php';

$dao = new AccountDAO();
$error = "";

if (isset($_POST['submit'])) {

    $status = $dao->signUp($_POST['name'], $_POST['email'], $_POST['password'], $_POST['investment'], $_POST['achievement'], $_POST['capital']);

    if ($status != "FAILED") {
        $_SESSION['loggedin'] = True;
        $_SESSION['uid'] = $status;

        header("Location: 7_dashboard.php");
    
        return;

    }
} else {
    header("Location: 1_welcome.html");
}

?>