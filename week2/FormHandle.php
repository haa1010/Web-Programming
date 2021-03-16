<html>

<head>
    <title> Hobby</title>
</head>

<body>
    <div>Hello, <?php print($_POST['name'] . " with " . $_POST['studentid']) ?></div>
    <div>You are studying at <?php print ($_POST['class']) . ',' . $_POST['uni'] ?> </div>
    <div>Your hobby is:</div>
    <ol>
        <?php
        foreach ($_POST['check_list'] as $i) {
            echo ("<li>$i</li>");
        }
        ?>
    </ol>
</body>