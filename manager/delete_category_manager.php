<?php
include "../mysql.php";
$value_ten_tloai = $_GET['ten_tloai'];
$value_ma_tloai = $_GET['id'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$sql = "DELETE FROM theloai WHERE ma_tloai = '$value_ma_tloai'";
if( Mysql::Update($sql) ) {
    $message = "success; đã xóa user có id = $value_ma_tloai";
}
else{
    $message = "error";
}
header("location:../admin/category.php?message=$message");
?>
