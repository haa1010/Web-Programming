<?php

function fetch_data($connect, $mydb)
{

    $SQLcmd = "Select * from Categories";
    mysqli_select_db($connect, $mydb);
    $results_id = mysqli_query($connect, $SQLcmd);
    if ($results_id) {
        while ($row = mysqli_fetch_row($results_id)) {

            print '<tr>';
            foreach ($row as $field) {
                print "<td>$field</td>";
            }
            print '</tr>';
        }
    } else {
        die("query =$SQLcmd failed!");
        mysqli_close($connect);
    }
}

?>
<html>

<head>
    <title>Category administation</title>
</head>

<body>
    <h1>Category Administration</h1>
    <table>
        <thead>
            <th>Cat ID </th>
            <th>Title</th>
            <th>Description</th>

        </thead>
        <tbody>
            <?php
            $server = 'localhost';
            $user = 'duonghue1';
            $pass = 'duonghue';
            $mydb = 'business_service';
            $table_name = 'Categories';
            $connect = mysqli_connect($server, $user, $pass);
            if (!$connect) {
                die("Cannot connect to $server using $user");
            } else {
                fetch_data($connect, $mydb);

                if (isset($_POST['catId'])) {
                    $catId = $_POST['catId'];
                    $title = $_POST['title'];
                    $des = $_POST['description'];
                    $query = "INSERT INTO $table_name VALUES ('$catId','$title','$des');";
                    if (mysqli_query($connect, $query)) {
                        print "<tr><td>$catId</td><td> $title</td><td>$des</td></tr>";
                        print "Insert into $table_name was successful!</font>";
                    } else {
                        print "Insert into $table_name failed!</font>";
                    }
                }
                mysqli_close($connect);
            }
            ?>

            <form action="admin.php" method="POST">
                <tr>
                    <td><input type="text" name="catId" /></td>
                    <td><input type="text" name="title" /></td>
                    <td><input type="text" name="description" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Add Category" />
                    </td>
                </tr>
            </form>

        </tbody>
    </table>
</body>



</html>