<?php

$server = 'localhost';
$user = 'duonghue1';
$pass = 'duonghue';
$mydb = 'business_service';
// $table_name = 'biz_categories';

$connect = new mysqli($server, $user, $pass, $mydb);
if (!$connect) {
    die("Cannot connect to $server using $user");
}
if (isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];
    // print_r($cat_id);
    $sql2 = $connect->prepare("select b.*, BC.* from Businesses as b
             join Biz_Categories BC on b.BusinessID = BC.BusinessID
             join Categories c on c.CategoryID = BC.CategoryID
            where c.CategoryID = ?");
    $sql2->bind_param('s', $cat_id);
    // print_r($sql2);
    // // print_r($_GET['cat_id']);
    $sql2->execute();
    $result2 = $sql2->get_result();
}

mysqli_select_db($connect, $mydb);

?>
<html>
<style type="text/css">
    table {
        margin: 0 2%;
        padding: 2px;
        border: 1px solid black;
    }

    th {
        border: 1px solid black;
        text-align: center;
    }

    .border {
        border: 1px solid black;

    }

    .column {
        /* column-count: 2; */
        display: flex;
    }
</style>

<head>
    <title>Business Listings</title>

<body>
    <h1>Business Listings</h1>

    <div class="column">
        <table style="width: 30%;">
            <tr>
                <th>Click on a category to find business listings:</th>
            </tr>
            <?php
            $query1 = "select Title,CategoryID as catid from Categories";
            $categories = mysqli_query($connect, $query1);
            // print_r($categories->num_rows);
            foreach ($categories as $cat) {
                echo "<tr><th><a href=\"?cat_id={$cat['catid']}\"> {$cat['Title']} </a></th></tr>";
                // print_r($cat);
            }
            ?>
        </table>

        <table style="width: 70%;">
            <?php
            if (isset($result2)) {
                while ($row = $result2->fetch_assoc()) {
                    print '<tr>';
                    foreach ($row as $field) {
                        print "<td  class=\"border\" >$field</td>";
                    }
                    print '</tr>';
                }
            }
            ?>
        </table>
    </div>
</body>

</html>