<html>

<head>
    <title> Coin Flip!</title>

</head>

<body>
    <form size=4 color="blue">Please Pick Head or Tails</form>
    <form action="GotFlip.php" method="POST">
        <?php
        print "<input type=\"radio\" name=\"pick\" value=0 > Head";
        print "<input type=\"radio\" name=\"pick\" value=1 > Tails";
        print "<br/>";
        ?>
        <INPUT TYPE="SUBMIT" VALUE="Submit">
        <INPUT TYPE="RESET" VALUE="Restart">
    </form>
</body>

</html>