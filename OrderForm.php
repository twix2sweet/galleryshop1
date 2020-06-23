<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order</title>
  <link rel="stylesheet" href="css/OrderForm.css">
   <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
  require_once 'dbconnect.php';

  $articles = mysqli_query($link, "SELECT * FROM `sales` WHERE `id` = ". $_GET['id']);

  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
            <div class="container">
            <h3>Enter your data</h3>
            <form method="POST" action="OrderAdd.php?id=<?php echo $art['id'] ?>" >
            <label"> Full Name</label>
            <input type="text" name="fullname" placeholder="Vasya Pupkin" required>
            <label> Email</label>
            <input type="email" id="mail" name="email" placeholder="mail@example.com">
            <label> Phone Number</label>
            <input type="text" name="phone" placeholder="+380123456789" required pattern="[+][0-9]{12}">
            <label> City</label>
            <input type="text" name="city" placeholder="Poltava" required>

              <div>
            <input type="text" placeholder="Put link on your image" required name="image">
              </div>
            </div></div>
            <div class="container"><button class="button">Complete Order</button ></form>
      <p><strong>Total</strong><span class="price" style="color:black"><b><?= '$'.$art['price'] ?></b></span></p>
    <? }?>
    </div>
    <script type="text/javascript">
    var form  = document.getElementsByTagName('form')[0];
    var email = document.getElementById('mail');
    var error = document.querySelector('.error');

    email.addEventListener("input", function (event) {
      if (email.validity.valid) {
        error.innerHTML = "";
        error.className = "error";
      }
    }, false);
    form.addEventListener("submit", function (event) {
      if (!email.validity.valid) {

        error.innerHTML = "I expect an e-mail, darling!";
        error.className = "error active";
        event.preventDefault();
      }
    }, false);
    </script>>
</body>