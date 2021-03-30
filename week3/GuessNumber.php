<?php
session_start();
if (!isset($_SESSION['ournumber'])) {
    $_SESSION['count'] = 0;
    $_SESSION['ournumber'] = rand(0, 100);
}
?>
<html>

<head>
    <title>Guessing a number</title>
</head>

<body>
    <font size="5" color blue> Try to guess a number from 0 to 100</font>
    <br>
    <form method="POST" action="GuessNumber.php" role="form">
        <input type="text" name="guess" />
        <input type="submit" value="submit">
    </form>
    <?php

    if (isset($_POST['guess'])) {
        $guess = $_POST['guess'];
        if (!is_numeric($guess)) {
            print "You must enter a number!";
        } else {
            $_SESSION['count']++;
            if ($guess > $_SESSION['ournumber']) {
                print "Wrong. Please try a lower number. You have guessed " . strval($_SESSION['count']) . " time!";
            }
            if ($guess < $_SESSION['ournumber']) {
                print "Wrong. Please try a higher number. You have guessed " . strval($_SESSION['count']) . " time!";
            }
            if ($guess == $_SESSION['ournumber']) {
                print "Congratulation. You've right!";
                session_destroy();
            }
        }
    }
    ?>
</body>

</html>