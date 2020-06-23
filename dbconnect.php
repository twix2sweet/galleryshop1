<?php
$host = "localhost";
$database = "galleryshop";
$user = "root";
$password = "root";
$link = mysqli_connect($host,$user,$password,$database) or die("Ошибка коннекта в админке " . mysql_error($link));

?>