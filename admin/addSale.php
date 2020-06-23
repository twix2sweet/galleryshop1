<?php
require_once 'dbconnect.php';
$infob1 = $_POST['infob1'];
$infob2 = $_POST['infob2'];
$infob3 = $_POST['infob3'];
$price = $_POST['price'];
$count  = mysqli_query($link, "INSERT INTO `sales` VALUES ( NULL, '$infob1','$infob2','$infob3','$price')");
if($count == false)
{
    echo 'TOVAR не создан' . mysqli_error($link);
}else
{
    header ('Location: admin.php');  // перенаправление на нужную страницу
    exit();
}
?>