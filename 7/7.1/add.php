<html>

<head>
	<title>Add Data</title>
</head>

<body>
	<?php
	include_once("config.php");

	if (isset($_POST['Submit'])) {
		$name = mysqli_real_escape_string($mysqli, $_POST['name']);
		$eno = mysqli_real_escape_string($mysqli, $_POST['eno']);
		$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
		$branch = mysqli_real_escape_string($mysqli, $_POST['branch']);
		$sem = mysqli_real_escape_string($mysqli, $_POST['sem']);
		$cno = mysqli_real_escape_string($mysqli, $_POST['cno']);

		if (empty($name) || empty($eno) || empty($gender) || empty($branch) || empty($sem) || empty($cno)) {
			if (empty($name)) {
				echo "<font color='red'>Name field is empty.</font><br/>";
			}
			if (empty($eno)) {
				echo "<font color='red'>Enrollment No. field is empty.</font><br/>";
			}
			if (empty($gender)) {
				echo "<font color='red'>Gender field is empty.</font><br/>";
			}
			if (empty($branch)) {
				echo "<font color='red'>Branch field is empty.</font><br/>";
			}
			if (empty($sem)) {
				echo "<font color='red'>Semester field is empty.</font><br/>";
			}
			if (empty($cno)) {
				echo "<font color='red'>Contact No. field is empty.</font><br/>";
			}
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			$result = mysqli_query($mysqli, "INSERT INTO students(name,eno,gender,branch,sem,cno) VALUES('$name','$eno','$gender','$branch','$sem','$cno')");
			echo "<font color='green'>Data added successfully.";
			echo "<br/><a href='index.php'>View Result</a>";
		}
	}
	?>
</body>

</html>