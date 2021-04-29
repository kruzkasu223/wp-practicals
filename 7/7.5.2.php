<html>

<head>
	<title>Practical 7.5</title>
</head>

<body>
	<p><a href="/7.5.php">Go to Login Page</a></p>
	<?php
	if (!empty($_POST["remember"])) {
		setcookie("username", $_POST["username"], time() + 3600);
		setcookie("password", $_POST["password"], time() + 3600);
		echo "<h2>You are Logged in.</h2>";
		echo "<p>Cookies Set Successfully.</p>";
	} else {
		setcookie("username", "");
		setcookie("password", "");
		echo "<h2>You are Logged in.</h2>";
		echo "<p>Cookies Not Set.</p>";
	}
	?>
</body>

</html>