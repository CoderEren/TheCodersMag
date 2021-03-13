<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background: #eee;
		}
		#form {
			border: solid gray 1px;
			width: 50%;
			border-radius: 5px;
			margin: 100px auto;
			background: #ffffff;
			padding: 50px;
		}
		#button {
			color: #ffffff;
			background: #2377cc;
			padding: 5px;
			width: 100%;
		}
		#user {
			width: 100%;
		}
		#password {
			width: 100%;
		}
	</style>
</head>
<body>

	<div id="form">
		<form action="process.php" method="POST">
			<p>
				<label>Username: </label>
				<input type="text" id="user" name="loginusername" required>
			</p>
			<p>
				<label>Password: </label>
				<input type="password" id="password" name="loginpassword" required>
			</p>
			<p>
				<input type="submit" id="button" value="Login" name="login">
			</p>
		</form>
	</div>

</body>
</html>