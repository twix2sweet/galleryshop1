<?php
require_once 'dbconnect.php';
$count  = mysqli_query($link, "DELETE FROM `user` WHERE `id` =  ".$_GET['id']);
if($count == false)
{
    echo 'не удалено' . mysqli_error($link);
}else
{
    header ('Location: admin.php');  // перенаправление на нужную страницу
    exit();
}
?>