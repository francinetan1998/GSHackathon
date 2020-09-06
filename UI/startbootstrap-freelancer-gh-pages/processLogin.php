<?php

require_once 'include/common.php';

$dao = new AccountDAO();
$error = "";

if (isset($_POST['submit'])) {

    $status = $dao->authenticate($_POST['email'], $_POST['password']);

    if ($status == "SUCCESS") {
        $_SESSION['loggedin'] = True;
        $_SESSION['uid'] = $status;

        header("Location: 7_dashboard.php");
    
        return;

    } else {
        $_SESSION["errors"] = $status;
        header("Location: 1b_login.php");
        return;
    }
} else {
    header("Location: 1_welcome.html");
}

?>