<html>

<head>
    <title>Coin Flip results</title>
</head>

<body>
    <?php
    $rand = ((float) microtime() * 1000000);
    $flip = rand(0, 1);
    $pick = $_POST["pick"];
    if ($flip == 0 && $pick == 0) {
        print "The flip=$flip, which is heads! <br/>";
        print '<font color="blue">You got it right!</font>';
    } elseif ($flip == 0 && $pick == 1) {
        print "The flip=$flip, which is heads! <br/>";
        print '<font color="red">You got it wrong!</font>';
    } elseif ($flip == 1 && $pick == 1) {
        print "The flip=$flip, which is Tails! <br/>";
        print '<font color="blue">You got it right!</font>';
    } elseif ($flip == 1 && $pick == 0) {
        print "The flip=$flip, which is Tails! <br/>";
        print '<font color="red">You got it wrong!</font>';
    } else {
        print "<br>Illegal state error!";
    }

    ?>
</body>

</html>