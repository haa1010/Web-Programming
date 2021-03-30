<html>

<head>
    <title>Date Time Function</title>
</head>

<body style="text-align: center; margin-top: 100px">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" style="display: inline-block">
        <?php
        if (array_key_exists("name1", $_GET)) {
            $name1 = $_GET['name1'];
            $date1 = $_GET['date1'];
            $month1 = $_GET['month1'];
            $year1 = $_GET['year1'];
            $name2 = $_GET['name2'];
            $date2 = $_GET['date2'];
            $month2 = $_GET['month2'];
            $year2 = $_GET['year2'];
        } else {
            $name1 = "";
            $date1 = 1;
            $month1 = 1;
            $year1 = 2000;
            $name2 = "";
            $date2 = 1;
            $month2 = 1;
            $year2 = 2000;
        }
        ?>
        <table>
            <h2>Enter your name and your DOB</h2>
            <tr>
                <td>Your name 1:</td>
                <td><input type="text" maxlength="50" name="name1" value=<?php print($name1) ?>></td>
            </tr>
            <tr>
                <td>DOB 1:</td>
                <td><select name="date1">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            if ($date1 == $i)
                                print("<option selected>$i</option>");
                            else
                                print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="month1">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            if ($month1 == $i)
                                print("<option selected>$i</option>");
                            else
                                print("<option>$i</option>");
                        }
                        ?>
                    </select><select name="year1">
                        <?php
                        for ($i = 1900; $i <= 2021; $i++) {
                            if ($year1 == $i)
                                print("<option selected>$i</option>");
                            else
                                print("<option>$i</option>");
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Your name 2:</td>
                <td><input type="text" maxlength="50" name="name2" value=<?php print($name2) ?>></td>
            </tr>
            <tr>
                <td>DOB 2:</td>
                <td><select name="date2">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            if ($date2 == $i)
                                print("<option selected>$i</option>");
                            else
                                print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="month2">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            if ($month2 == $i)
                                print("<option selected>$i</option>");
                            else
                                print("<option>$i</option>");
                        }
                        ?>
                    </select><select name="year2">
                        <?php
                        for ($i = 1900; $i <= 2021; $i++) {
                            if ($year2 == $i)
                                print("<option selected>$i</option>");
                            else
                                print("<option>$i</option>");
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
        <br>
        <table>
            <br>
            <?php

            function monthToDays($month, $isLeap = false)
            {
                switch ($month) {
                    case '1':
                    case '3':
                    case '5':
                    case '7':
                    case '8':
                    case '10':
                    case '12':
                        return 31;

                    case '4':
                    case '6':
                    case '9':
                    case '11':
                        return 30;
                    case '2':
                        if ($isLeap) return 29;
                        else return 28;
                }
            }

            function validateDayMonth($date, $month, $year)
            {
                if ($month == 2) {
                    $isLeap =  date('L', mktime(0, 0, 0, 1, 1, $year));
                    return $date <= monthToDays($month, $isLeap);
                } else return $date <= monthToDays($month);
            }

            function dateProcessing($name, $date, $month, $year)
            {
                $format =  $date->format('l, F n, Y');
                $age = $date->diff(date_create('now'))->format('%y');
                print("$name was born on $format, $age years old. <br>");
            }

            if (array_key_exists("name1", $_GET)) {
                if (!validateDayMonth($date1, $month1, $year1)) {
                    print "$name1 has invalid birthday!";
                    return;
                }
                if (!validateDayMonth($date2, $month2, $year2)) {
                    print "$name2 has invalid birthday!";
                    return;
                }

                $date1 = new DateTime($date1 . '-' . $month1 . '-'  . $year1);
                $date2 = new DateTime($date2 . '-' . $month2 . '-'  . $year2);
                dateProcessing($name1, $date1, $month1, $year1);
                dateProcessing($name2, $date2, $month2, $year2);

                $diff = $date1->diff($date2);
                printf("Day different between 2 birthdays is %s day(s).<br>", $diff->format('%a'));
                printf("Year different between 2 birthdays is %s year(s).",  $diff->format('%y'));
            }
            ?>
        </table>
</body>

</html>