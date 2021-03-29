<html>

<head>
    <title>Conditional Test</title>
</head>
<?php

?>

<body>
    <html>

    <head>
        <title>Conditional Test</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
            if (array_key_exists("name", $_GET)) {
                $name = $_GET['name'];
                $date = $_GET['date'];
                $month = $_GET['month'];
                $year = $_GET['year'];
                $name = $_GET['name'];
                $hour = $_GET['hour'];
                $min = $_GET['min'];
                $second = $_GET['second'];
            } else {
                $date = 1;
                $month = 1;
                $year = 2000;
                $name = '';
                $hour = 0;
                $min = 0;
                $second = 0;
            }
            ?>
            <table>
                <p>Enter your name and select date and time for the appointment</p>
                <tr>
                    <td>Your name:</td>
                    <td><input type="text" maxlength="50" name="name" value=<?php print($name) ?>></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><select name="date">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                if ($date == $i)
                                    print("<option selected>$i</option>");
                                else
                                    print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select name="month">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                if ($month == $i)
                                    print("<option selected>$i</option>");
                                else
                                    print("<option>$i</option>");
                            }
                            ?>
                        </select><select name="year">
                            <?php
                            for ($i = 2000; $i <= 2021; $i++) {
                                if ($year == $i)
                                    print("<option selected>$i</option>");
                                else
                                    print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td><select name="hour">
                            <?php
                            for ($i = 0; $i <= 23; $i++) {
                                if ($hour == $i)
                                    print("<option selected>$i</option>");
                                else
                                    print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select name="min">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                if ($min == $i)
                                    print("<option selected>$i</option>");
                                else
                                    print("<option>$i</option>");
                            }
                            ?>
                        </select><select name="second">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                if ($second == $i)
                                    print("<option selected>$i</option>");
                                else
                                    print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"></td>
                    <td><input type="reset" value="reset"></td>
                </tr>
            </table>
            <table>
                <?php
                function getDay()
                {
                }
                function transform($a)
                {
                    return $a < 10 ? "0" . strval($a) : $a;
                }
                function daytime($h, $m, $s, $y, $M, $d, $base = false)
                {
                    $ex = "";
                    $m = transform($m);
                    $s = transform($s);
                    $M = transform($M);
                    $d = transform($d);
                    if ($base) {
                        $ex = " AM";
                        if ($h > 12) {
                            $h = $h - 12;
                            $ex = " PM";
                        }
                    }
                    return "$h:$m:$s$ex, $d/$M/$y";
                }
                if (array_key_exists("name", $_GET)) {
                    print("Hi $name!<br>");
                    print "You have choose to have an appointment on " . daytime($hour, $min, $second, $year, $month, $date) . "<br>";
                    print("More information<br>");
                    print "In 12 hours, the time and date is " . daytime($hour, $min, $second, $year, $month, $date, true);
                    print "<br>This month has " . date('t', strtotime($date . '-' . $month . '-' . $year)) . " days!";
                }
                ?>
            </table>
    </body>

    </html>
</body>

</html>