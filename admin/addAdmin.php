<?php
require_once 'dbconnect.php';
$login = $_POST['login'];
$password = $_POST['password'];
$count  = mysqli_query($link, "INSERT INTO `user` VALUES ( NULL, '$login','$password')");
if($count == false)
{
    echo 'User не создан' . mysqli_error($link);
}else
{
    header ('Location: admin.php');  // перенаправление на нужную страницу
    exit();
}
?>