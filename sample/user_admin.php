<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="user_admin.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="index.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<button name="submit" class="btn">User</button>
			</div>
		</form>

		<form action="admin.php" method="POST" class="login-email">
			<div class="input-group">
				<button name="submit" class="btn">Admin</button>
			</div>
		</form>
	</div>


</body>
</html>