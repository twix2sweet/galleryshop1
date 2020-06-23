<?php require_once 'dbconnect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$count = mysqli_query( $link, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'" );
if(mysqli_num_rows($count) == 0)
{
    echo 'Такого админа нету';
}else
{
    header ('Location: admin.php');  // перенаправление на нужную страницу
    exit();
}

?>