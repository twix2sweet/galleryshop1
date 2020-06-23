<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Qwigley&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/Blog.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
    <title>Blog</title>
</head>
<body>
  <?php include("header.php");?>
<div class="emptyy"></div>
<div class="line"></div>
<div class="fon">
  <div class="contnt"><?
  require_once 'dbconnect.php';

  $articles = mysqli_query($link, "SELECT * FROM `blog`");

  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
    <div class="post">
      <img 
      class="image"
      img
      src="<?php echo $art['image'];?>">
      <h1><?=$art['zagolovok'] ?></h1>
     <?= $art['text'] ?>
    </div>
  <?php
}
?>
  </div>
</div>
<?php
include("footer.php");
?>
</body>
</html>