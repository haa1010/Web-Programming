<html>

<head>
    <title>Table Output</title>
</head>

<body>
    <h1>Products Data</h1>
    <?php
    $query = "Select * from Products";
    echo "<h2>The query is <b>$query</b></h2>";


    ?>

    <table>
        <th>Num</th>
        <th>Product</th>
        <th>Cost</th>
        <th>Weight</th>
        <th>Count</th>
        <?php

        $server = 'localhost';
        $user = 'hangtt';
        $pass = '1';
        $mydb = 'test';

        $conn = new mysqli($server, $user, $pass, $mydb);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $i = 1;
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $i++; ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["Product_desc"]; ?></td>
                    <td><?php echo $row["Cost"]; ?></td>
                    <td><?php echo $row["Weight"]; ?></td>
                    <td><?php echo $row["Numb"]; ?></td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</body>

</html>