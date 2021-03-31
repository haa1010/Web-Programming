<html>

<head>
    <title>Tuna Cafe</title>
</head>

<body>
    <h2 style="color: blue;">Tuna Cafe Results Received</h2>
    <?php
    $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');

    if (!isset($_GET["prefer"]))
        print "Oh no! Please pick something as your favourite!";
    else {
        $prefer = $_GET["prefer"];
        print "<br>Your selections were <ul>";
        foreach ($prefer as $item)
            print "<li>$menu[$item]</li>";
        print "</ul>";
    }
    ?>
</body>

</html>