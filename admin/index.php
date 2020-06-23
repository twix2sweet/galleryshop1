<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authorization</title>
	<link rel="stylesheet" href="Authorization.css">
</head>
<body>
<?php require_once 'dbconnect.php'; ?>
<form method='POST' action="handle.php">
	<div class="form">
		<h1>Authorization Admin</h1>
		<div class="inputs">
			<input type="text" placeholder="Name" name="login">
		</div>

		<div class="inputs">
			<input type="password" placeholder="Password" name="password">
		</div>

		<div class="inputs">
			<input type="submit" value="Log in">
		</div>
	</div>
</form>
</body>
</html>