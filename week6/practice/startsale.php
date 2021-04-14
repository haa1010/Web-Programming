<html>

<head>
    <title>Table Output</title>
</head>

<body>
    <h1>Select Product we just sold:</h1>

    <form action="sale.php" method="get">
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

        $sql = "Select Product_desc from Products";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>
            <input type="radio" name="product" value=<?php echo $row['Product_desc']; ?> /><?php echo $row['Product_desc']; ?>
        <?php } ?>

        </p>
        <input type="submit" value="Submit" />
        <input type="reset" value="Reset" />
    </form>

    <table>
        <th>Num</th>
        <th>Product</th>
        <th>Cost</th>
        <th>Weight</th>
        <th>Count</th>
        <?php
        $query = "Select * from Products";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $i = 0;

            echo "<h2>The query is <b>$query</b></h2>";

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