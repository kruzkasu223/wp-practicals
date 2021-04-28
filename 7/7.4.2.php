<html>

<head>
    <title>Practical 7.4 Output</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Emp ID </th>
            <th>Job Titles </th>
            <th>Years</th>
        </tr>
        <?php

        $empID = $_POST['empID'];
        $jobTitle = $_POST['jobtitle'];
        $array = $_POST['yrsExp'];
        $array = array_map(function ($value) {
            return (int)$value;
        }, $array);

        $arr = array();
        for ($i = 0; $i < count($empID); $i++) {
            $arr[$i]['id'] = $empID[$i];
            $arr[$i]['title'] = $jobTitle[$i];
            $arr[$i]['yrs'] = $array[$i];
        }

        $result = sortTwoDArray($arr, 'yrs');

        function sortTwoDArray($arr, $arrkey, $sortOrder = SORT_ASC)
        {
            foreach ($arr as $key => $row) {
                $key_arr[$key] = $row[$arrkey];
            }
            array_multisort($key_arr, $sortOrder, $arr);
            return $arr;
        }

        for ($i = 0; $i < count($empID); $i++) {
            print "<tr>";
            print "<td>";
            echo $result[$i]['id'];
            print "</td>";
            print "<td>";
            echo $result[$i]['title'];
            print "</td>";
            print "<td>";
            echo $result[$i]['yrs'];
            print "</td>";
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>