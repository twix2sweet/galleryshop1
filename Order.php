<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/header.css">
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
  <link rel="stylesheet" href="css/Order.css">
  <link rel="stylesheet" href="css/footer.css">

  <title>Order</title>
</head>
<?php
include("header.php");
?>
<!-- <script src="js/main.js"></script> -->
<div class="choose" style="background-color: #708090;">
  <div class="empty"></div>
  <div class="ord__text"> Choose your desired features. </div>

  <div class="ch__fon">
    <div class="ch__back">
    <div class="choose__form" style="background-color: rgba(255, 255, 255, 0.55);"><?php
  require_once 'dbconnect.php';

  $articles = mysqli_query($link, "SELECT * FROM `sales`");

  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
      <div class="choose__item"><?= $art['infob1'] ?><br><?= $art['infob2'] ?><br><?= $art['infob3'] ?><br><?='$'. $art['price'] ?>
      <form method="POST" action="OrderForm.php?id=<?php echo $art['id'] ?>" >
        <button>Checkout</button>
      </form>
    </div>
      <?php
}
?>
    </div>
  </div>
</div>
<div class="foot"></div>

<?php
include("footer.php");
?>
</body>

</html>
