<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include "../mysql.php";
session_start();

$userName = $_POST['userName'];
$password = $_POST['password'];
// echo "$userName $password";
if(Mysql::check("select * from users where userName = '$userName' and userPassword = '$password'")){
    $_SESSION['loginSuccess'] = true;
    header("Location:../users/index.php");
}
else{
    header("Location:../login.php?mes=error");
}
?>
