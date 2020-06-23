<?php
require_once 'dbconnect.php';
$zagolovok = $_POST['zagolovok'];
$text = $_POST['text'];
$image = $_POST['image'];
$count  = mysqli_query($link, "INSERT INTO `blog` VALUES ( NULL, '$zagolovok','$text', '$image' )");
if($count == false)
{
    echo 'Blog не создан' . mysqli_error($link);
}else
{
    header ('Location: admin.php');  // перенаправление на нужную страницу
    exit();
}
?>