<?php
include "../mysql.php";
$value_ten_tloai = $_POST['ten_tloai'];
$value_ma_tloai = $_POST['id'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$sql = "UPDATE theloai SET ten_tloai = '$value_ten_tloai' WHERE ma_tloai = '$value_ma_tloai'";
if( Mysql::Update($sql) ) {
    $message = "success user id = $value_ma_tloai";
}
else{
    $message = "error";
}
header("location:../admin/category.php?message=$message");
?>
