<html>

<head>
    <title>practical7.4</title>
</head>

<body>
    <form method="post" action="http://localhost:8000/7/7.4.2.php">
        <p>Enter Employee ID</p>
        <input name="empID[]" size="5" type="number" />
        <input name="empID[]" size="5" type="number" />
        <input name="empID[]" size="5" type="number" />
        <input name="empID[]" size="5" type="number" />

        <p> Enter Jobs Titles</p>
        <input name="jobtitle[]" size="10" type="text" />
        <input name="jobtitle[]" size="10" type="text" />
        <input name="jobtitle[]" size="10" type="text" />
        <input name="jobtitle[]" size="10" type="text" />

        <p>Enter Years of Experience</p>
        <input name="yrsExp[]" size="2" type="number" />
        <input name="yrsExp[]" size="2" type="number" />
        <input name="yrsExp[]" size="2" type="number" />
        <input name="yrsExp[]" size="2" type="number" />

        <input type="submit" value="submit" />
    </form>
</body>

</html>