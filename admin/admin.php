<?php
require_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Administrators</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="Mainform">
<table class="table">
	<caption><strong>Administrators</strong></caption>
  <?php
  $articles = mysqli_query($link, "SELECT * FROM `user`");
  ?>
  <thead>
	<tr>
		<th>id</th>
    	<th>Login</th>
    	<th>Password</th>
      <th></th>
	</tr></thead>
  <?php
  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
	<tbody><tr>
    <td><?= $art['id'] ?></td>
    <td><?= $art['login'] ?></td>
    <td><?= $art['password'] ?></td>
    <form method='POST' action = "deleteAdmin.php?id=<?php echo $art['id']?>">
    <td><button placeholder="delAdmin">Delete</button></td></tbody>
  </form>
  </tr>

  <?php
  }
  ?>

</table>

<form class = "add" method="POST" action = "addAdmin.php">
            <input type="text" required placeholder="login" name="login">
            <input type="text" required placeholder="password" name="password">
            <td><button placeholder="addAdmin">Add</button></td>
</form>

  <?php
  $articles = mysqli_query($link, "SELECT * FROM `orders`");
  ?>
<table class="table">
  <caption><strong>Active orders</strong></caption>
  <thead><tr>
    <th>id</th>
      <th>Name</th>
      <th>City</th>
      <th>Mail</th>
      <th>Telephone</th>
      <th>Picture</th>
      <th>Price</th>

  </tr></thead>
  <?php
  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
  <tbody><tr>
    <td><?= $art['id'] ?></td>
    <td><?= $art['name'] ?></td>
    <td><?= $art['city'] ?></td>
    <td><?= $art['email'] ?></td>
    <td><?= $art['phonenumber'] ?></td>
    <td><?= $art['pic'] ?></td>
    <td><?= $art['price'] ?></td>
     <form method='POST' action = "delOrder.php?id=<?php echo $art['id']?>">
    <td><button placeholder="delAdmin">Delete</button></td></form>
  </tr></tbody>

  <?php
  }
  ?>

<?php
  $articles = mysqli_query($link, "SELECT * FROM `blog`");
  ?>
<table class="table">
  <caption><strong>Blog / News</strong></caption>
  <tr>
    <thead><th>id</th>
      <th>ZAGOLOVOK</th>
      <th>TEXT</th>
      <th>Image</th>
  </tr></thead>
  <?php
  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
  <tbody><tr>
    <td><?= $art['id'] ?></td>
    <td><?= $art['zagolovok'] ?></td>
    <td style="max-width: 1300px;"><?= $art['text'] ?></td>
    <td><?= $art['image'] ?></td>
    <form method='POST' action = "delBlog.php?id=<?php echo $art['id']?>">
    <td><button placeholder="delAdmin">Delete</button></td></form>
  </tr></tbody>

  <?php
  }
  ?>
</table>
  <form class = "add" method="POST" action = "addBlod.php">
            <input type="text" required placeholder="zagolowok" name="zagolovok">
            <input type="text" required placeholder="text" name="text">
            <input type="text" required placeholder="image" name="image">
            <td><button placeholder="addAdmin">Add</button></td>
  </form>
  <table class="table">
    <caption><strong>Available materials</strong></caption>
  <?php
  $articles = mysqli_query($link, "SELECT * FROM `sales`");
  ?>

  <thead><tr>
    <th>id</th>
      <th>Tovar 1</th>
      <th>Tovar 2</th>
      <th>Tovar 3</th>
      <th>Price</th>
  </tr></thead>
  <?php
  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
  <tbody><tr>
    <td><?= $art['id'] ?></td>
    <td><?= $art['infob1'] ?></td>
    <td><?= $art['infob2'] ?></td>
    <td><?= $art['infob3'] ?></td>
    <td><?= $art['price'] ?></td>
    <form method='POST' action = "delSel.php?id=<?php echo $art['id']?>">
    <td><button placeholder="delAdmin">Delete</button></td></form>
  </tr></tbody>

  <?php
  }
  ?>

</table><form class = "add" method="POST" action = "addSale.php">
            <input type="text" required placeholder="Tovar 1" name="infob1">
            <input type="text" required placeholder="Tovar 2" name="infob2">
            <input type="text" required placeholder="Tovar 3" name="infob3">
            <input type="text" required placeholder="price" name="price">
            <td><button placeholder="addAdmin">Add</button></td>
  </form>
</div>
</body>