<html>

<head>
    <title>Insert Results</title>
</head>

<body>

    <?php
    $host = 'localhost';
    $user = 'hangtt';
    $pass = '1';
    $mydb = 'test';
    $connect = mysqli_connect($host, $user, $pass);
    $table_name = 'Products';
    if (isset($_GET['Item']) || isset($_GET['Cost']) || isset($_GET['Weight']) || isset($_GET['Quantity']))
        $Item = $_GET['Item'];
    $Weight = $_GET['Weight'];
    $Cost = $_GET['Cost'];
    $Quantity = $_GET['Quantity'];
    $query = "INSERT INTO $table_name VALUES ('0','$Item','$Cost','$Weight','$Quantity')";
    print "The Query is <i>$query</i><br>";
    mysqli_select_db($connect, $mydb);
    print '<br><font size="4" color="blue">';
    if (mysqli_query($connect, $query)) {
        print "Insert into $mydb was successful!</font>";
    } else {
        print "Insert into $mydb failed!</font>";
    }
    mysqli_close($connect);
    ?></body>

</html>