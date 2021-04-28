<html>

<head>
    <title>Practical 7.3</title>
</head>

<body>
    <table border=1>
        <tr>
            <th>Integers</th>
            <th>Cube</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $a = $i * $i * $i;
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $a . "</td>";
            echo "</tr>";
        }
        ?>
</body>

</html>