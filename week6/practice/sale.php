<html>

<head>
    <title>Update Results</title>
</head>

<body>
    <h1>Update Results for table Products</h1>

    <?php
    $server = 'localhost';
    $user = 'hangtt';
    $pass = '1';
    $mydb = 'test';
    $table_name = 'Products';

    if (isset($_GET['product']))
        $product = $_GET['product'];

    $query = "Update Products set Numb = ( Numb - 1 ) Where Product_desc = \"$product\"";

    print "The query is <i>$query</i><br>";

    $conn = new mysqli($server, $user, $pass, $mydb);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($query);
    $query = "Select * from Products";
    $result = $conn->query($query);

    if (!empty($result) && $result->num_rows > 0) {
        $i = 1;
        // output data of each row
        print "    <table>
            <th>Num</th>
            <th>Product</th>
            <th>Cost</th>
            <th>Weight</th>
            <th>Count</th>";
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