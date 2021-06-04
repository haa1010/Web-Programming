<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        function getProd($string){
            $prod = array();
            $items = explode("&", $string);
            foreach($items as $item){
                array_push($prod, explode("-", $item)[0]);
            }
            return $prod;
        }
        function getStatus($string){
            $status = array();
            $items = explode("&", $string);
            foreach($items as $item){
                array_push($status, explode("-", $item)[1]);
            }
            return $status;
        }

        $host = 'localhost';
        $user = 'root';
        $passwd = '';
        $database = 'mydatabase';

        $connect = mysqli_connect($host, $user, $passwd);
        $connect->select_db($database);
        $table_name = 'Product_Office';

        if(isset($_COOKIE['prod'])){
            $value = $_COOKIE['prod'];
            $prods = getProd($value);
            $status_s = getStatus($value);
            $images = array();

            foreach($prods as $prod){
                $query = "SELECT Image FROM $table_name WHERE (Name = '$prod')";
                $result = $connect->query($query);
                if($result){
                    while($row = $result->fetch_assoc()){
                        array_push($images, $row['Image']);
                    }
                }
            }
        } else {
            $value = '';
        }
    ?>
    <h1 class="title">View Shopping Cart</h1>
    <table>
        <tr>
            <th style="width: 30%;"></th>
            <th style="width: 45%;">Software Title</th>
            <th style="width: 15%;">Deliverable</th>
            <th style="width: 10%;">Price</th>
        </tr>
        <?php
            if($value!=''){
                for($i=0; $i <count($prods); $i++){
                    print "<tr>";
                    print "<td><div><img margin-top=10px width=50px height=50px src='./images/".$images[$i]."'></div></td>";
                    print "<td align='center'><div><p>".$prods[$i]."</p><button class='delete_items'>Delete</button><button class='edit_items'>Edit</button></div></td>";
                    print "<td align='center'><div><p>".strtoupper($status_s[$i])."</p></div></td>";
                    print "<td align='center'><div><p>Free</p></div></td>";
                    print "</tr>";
                }
            }
            else{
                print "<tr>";
                print "<td align='center'><div><p>No product</p></div></td>";
                print "<td align='center'><div><p>No product</p></div></td>";
                print "<td align='center'><div><p>No product</p></div></td>";
                print "<td align='center'><div><p>No product</p></div></td>";
                print "</tr>";
            }
        ?>
    </table>
    <button><a href="index.php">Continue Shopping</a></button>
    <button onclick="checkout()">Checkout</button>

    <script>
        function checkout(){
            alert("Check out successfully");
        }
        document.querySelectorAll('.delete_items').forEach(function(button){
            button.onclick = function(){
                button.parentElement.parentElement.parentElement.parentElement.removeChild(button.parentElement.parentElement.parentElement);
            }
        })
    </script>
</body>
</html>