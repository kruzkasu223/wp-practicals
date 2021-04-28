<html>

<head>
    <title>Practical 7.2</title>
</head>

<body>
    <h2>Find Leap year or not </h2>
    <form action="" method="post">
        <input type="number" name="year" />
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_POST) {
        $year = $_POST['year'];
        if ((0 == $year % 4) and (0 != $year % 100) or (0 == $year %
            400)) {
            echo "<h3>$year is a Leap year.</h3>";
        } else {
            echo "<h3>$year is not a Leap year.</h3>";
        }
    }
    ?>
</body>

</html>