<?php
include_once("config.php");
if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
	} else {
		$result = mysqli_query($mysqli, "UPDATE students SET name='$name',eno='$eno',gender='$gender',branch='$branch',sem='$sem',cno='$cno' WHERE id=$id");
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM students WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$name = $res['name'];
	$eno = $res['eno'];
	$gender = $res['gender'];
	$branch = $res['branch'];
	$sem = $res['sem'];
	$cno = $res['cno'];
}
?>
<html>

<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br /><br />

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>Enrollment No.</td>
				<td><input type="number" name="eno" value="<?php echo $eno; ?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male" <?php
																	if ($gender == 'male') {
																		echo 'checked';
																	}
																	?>> Male &nbsp;
					<input type="radio" name="gender" value="female" <?php
																		if ($gender == 'female') {
																			echo 'checked';
																		}
																		?>> Female
				</td>
			</tr>
			<tr>
				<td>Branch</td>
				<td><input type="text" name="branch" value="<?php echo $branch; ?>"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="number" name="sem" value="<?php echo $sem; ?>"></td>
			</tr>
			<tr>
				<td>Contact No.</td>
				<td><input type="number" name="cno" value="<?php echo $cno; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>

</html>