<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM students ORDER BY id DESC");
?>

<html>

<head>
	<title>Homepage</title>
</head>

<body>
	<a href="add.html">Add New Data</a><br /><br />

	<table width='100%' border=0>

		<tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Enrollment No.</td>
			<td>Gender</td>
			<td>Branch</td>
			<td>Semester</td>
			<td>Contact No.</td>
			<td></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $res['name'] . "</td>";
			echo "<td>" . $res['eno'] . "</td>";
			echo "<td>" . $res['gender'] . "</td>";
			echo "<td>" . $res['branch'] . "</td>";
			echo "<td>" . $res['sem'] . "</td>";
			echo "<td>" . $res['cno'] . "</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>

</html>