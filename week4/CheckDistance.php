<html>

<head>
    <title>Distance and Time Calculations</title>
</head>

<body>
    <?php
    $cities = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409);
    $destination = $_GET["destination"];
    if (isset($destination)) {
        print "From Chicago to:";
        print " <table>
        <th>No.</th><th>destination</th><th>Distance</th><th>Driving time</th><th>Walking time</th>";
        $i = 1;
        foreach ($destination as  $item) {
            $distance = $cities[$item];
            $time = round(($distance) / 60, 2);
            $walktime = round(($distance) / 5, 2);
            print "<tr><td>$i</td><td>$item</td><td>$distance</td><td>$time</td><td>$walktime</td></tr>";
            $i++;
        }

        print "</table>";

        // print "The distance between Chicago and <i>$destination</i> is $distance miles.";
        // print "<br>Driving at 60 miles per hour it would take $time hours.";
        // print "<br>Walking at 5 miles per hour it would take $walktime hours.";
    } else print "Sorry, do not have destination information for $destination";
    ?>
</body>

</html>