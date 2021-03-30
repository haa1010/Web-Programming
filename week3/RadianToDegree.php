<html>

<head>
    <title>Date Time Validation</title>
</head>

<body style="text-align: center; margin-top: 100px">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <?php
        if (array_key_exists("rad1", $_GET)) {
            $rad1 = $_GET["rad1"];
        } else {
            $rad1 = 0;
        }
        ?>
        <h2>Radians to Degree: </h2>
        <input type="text" name="rad1" value=<?php print($rad1) ?>>
        <?php
        if (array_key_exists("rad1", $_GET)) {
            if (is_numeric($rad1)) {
                $deg1 = round($rad1 * 180 / M_PI, 2);
                print "<br> => $rad1 rad  = $deg1 deg <br>";
            } else {
                print "<br>Invalid number<br>";
            }
        }
        ?>
        <input type="submit" value="SUBMIT"><input type="reset" value="RESET">
    </form>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <?php
        if (array_key_exists("deg2", $_GET)) {
            $deg2 = $_GET["deg2"];
        } else {
            $deg2 = 0;
        }
        ?>
        <h2>Degree to Radian: </h2>
        <input type="text" name="deg2" value=<?php print($deg2) ?>>
        <?php
        if (array_key_exists("deg2", $_GET)) {
            if (is_numeric($deg2)) {
            $rad2 = round($deg2 * M_PI / 180, 2);
            print "<br> => $deg2 deg  = $rad2 rad <br>";}
            else {
                print "<br>Invalid number<br>";
            }
        }
        ?>
        <input type="submit" value="SUBMIT"><input type="reset" value="RESET">
    </form>
</body>

</html>