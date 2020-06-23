<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Administrators</title>
  <link rel="stylesheet" href="UsersTable.css">
</head>
<body>
<div class="Mainform">
<table class="table">
	<caption><strong>Administrators</strong></caption>
  <?php
  $articles = mysqli_query($link, "SELECT * FROM `user`");
  ?>

	<tr>
		<th>id</th>
    	<th>Name</th>
    	<th>City</th>
      <th>Mail</th>
      <th>Telephone</th>
      <th>Picture</th>
      <th>Price</th>
      <th>Status</th> <!-- Complete/Canceled/working-->
	     <th></th>
      <th></th>
  </tr>
  <?php
  while ($art= mysqli_fetch_assoc($articles)) {
  ?>
	<tr>
    <td><?= $art['id'] ?></td>
    <td><?= $art['name'] ?></td>
    <td><?= $art['city'] ?></td>
    <td><?= $art['mail'] ?></td>
    <td><?= $art['telephone'] ?></td>
    <td><?= $art['pic'] ?></td>
    <td><?= $art['price'] ?></td>
    <td><?= $art['status'] ?></td>
    <td></td>
    <td><button placeholder="cancel">Cancel</button></td>
    <td><button placeholder="delAdmin">Complete</button></td>
  </tr>

  <?php
  }
  ?>

</table>
</div>
</body>