<html>

<head>
	<title>Practical 7.5</title>
</head>

<body>
	<form action="/7.5.2.php" method="post">
		<p>
			Username: <input name="username" type="text" value="<?php if (isset($_COOKIE["username"])) {
																	echo $_COOKIE["username"];
																} ?>">
		</p>
		<p>Password: <input name="password" type="password" value="<?php if (isset($_COOKIE["password"])) {
																		echo $_COOKIE["password"];
																	} ?>">
		</p>
		<p><input type="checkbox" name="remember" /> Remember me
		</p>
		<p><input type="submit" value="Login"></span></p>
	</form>
</body>

</html>