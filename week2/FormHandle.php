<html>

<head>
    <title> Hobby</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="background" style=" display:flex;align-items: center; justify-content: center; font-size: 20px">
    <div style="max-width: fit-content">
        <div style="margin-top: 100px;" class=" full-height">
            <h2 >Hello, <?php print($_POST['name'] . " with ID " . $_POST['studentid']) ?></h2>
            <div style="margin-bottom: 20px;">You are studying at <?php print ($_POST['class']) . ',' . $_POST['uni'] ?> </div>
            <div class=" row ">Your hobby is:</div>
            <ol>
                <?php
                foreach ($_POST['check_list'] as $i) {
                    echo ("<li>$i</li>");
                }
                ?>
            </ol>
        </div>
    </div>
</body>