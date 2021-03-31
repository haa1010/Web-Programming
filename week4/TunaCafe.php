<html>

<head>
    <title>
        Tuna Cafe
    </title>
</head>

<body>
    <font size="4 " color="blue">
        Welcome to the Tuna Cafe Survey!
    </font>
    <form action="TunaResults.php" method="GET">
        <?php
        $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuan Surprise');
        $bestseller = 2;
        print "please indicate all your favourite dishes. <br/>";
        for ($i = 0; $i < count($menu); $i++) {
            print "<input type=\"checkbox\" name=\"prefer[]\" value=$i>$menu[$i]";
            if ($i == $bestseller) {
                print '<font color=red>Our Best Seller!!!</font>';
            }
            print '<br/>';
        }

        ?>
        <INPUT TYPE="SUBMIT" VALUE="Submit">
        <INPUT TYPE="RESET" VALUE="Restart">
    </form>
</body>


</html>