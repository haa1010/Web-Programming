<html>

<head>
    <title>Our Shop</title>
</head>

<body>
    <font size="4" color="blue">
        <?php
        $today = date('l, F d, Y');
        print "Welcome on $today to our huge blowout sale!</font>";
        $month = date('m');
        $year = date('Y');
        $dayofyear = date('z');
        if ($month == 12 && $year == 2001) {
            $dayleft = (365 - $dayofyear + 10);
            print "<br/> There are $dayleft sales days left";
        } elseif ($month == 01 && $year == 2002) {
            if ($dayofyear < 10) {
                $dayleft = (10 - $dayofyear);
                print "<br/>There are $dayleft sales days left";
            } else {
                print "<br/> Sorry, our sale is over";
            }
        } else {
            print "<br/> Sorry, our sale is over";
        }
        print "<br/>Sale Ends January January 10,2002";
        ?>
</body>

</html>