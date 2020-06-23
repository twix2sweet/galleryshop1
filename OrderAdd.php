<?php
require_once 'dbconnect.php';

 $articles = mysqli_query($link, "SELECT * FROM `sales` WHERE `id` = ". $_GET['id']);

  while ($art= mysqli_fetch_assoc($articles)) {
$price = $art['price'];
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$image = $_POST['image'];
$count  = mysqli_query($link, "INSERT INTO `orders` VALUES ( NULL, '$fullname','$email','$price','$phone','$city','$image')");
if($count == false)
{
    echo 'TOVAR не создан' . mysqli_error($link);
}else
{
    header ('Location: index.php');  // перенаправление на нужную страницу
    exit();
}
}
?>