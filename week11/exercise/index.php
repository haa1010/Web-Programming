<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        $host = 'localhost';
        $user = 'root';
        $passwd = '';
        $database = 'mydatabase';

        $connect = mysqli_connect($host, $user, $passwd);
        $connect->select_db($database);
        $table_name = 'Product_Office';
    ?>
    <div class="choose_prod">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="products">Choose a product:</label>
            <select style="width: 400px;" name="prod_selected" id="products">
                <?php
                $query_1 = "SELECT Name FROM $table_name";
                $result_1 = $connect -> query($query_1);
                if($result_1->num_rows > 0){
                    while ($row = $result_1->fetch_assoc()){
                        print "<option value='".$row['Name']."'>".$row['Name']."</option>";
                    }
                }
                ?>
            </select>
            <input type="submit" value="Detail">
          </form>
    </div>
    <div class="prod_detail">
        <h1 class="title">Product Details</h1>
        <p style="color:red">Please choose a product and click detail to see information of product before adding to cart</p>
        <?php
            if(array_key_exists("prod_selected", $_GET)){
                $prod_selected = $_GET["prod_selected"];
            }
            else $prod_selected = "Word 2019";
        ?>
        <table class="information">
            <tr>
                <td style="width: 50%;">
                    <div>
                        <?php
                            $query_2 = "SELECT * FROM $table_name WHERE (Name = '$prod_selected')";
                            $data = $connect->query($query_2);
                            if($data) {
                                while($row = $data ->fetch_assoc()){
                                    print "<ul>";
                                    print "<li><b>Product Name: </b>".$row['Name']."</li>";
                                    print "<li><b>Publisher: </b>".$row['Publisher']."</li>";
                                    print "<li><b>SKU: </b>".$row['SKU']."</li>";
                                    print "<li><b>Platform: </b>".$row['Platform']."</li>";
                                    print "</ul>";
                                }
                            }
                        ?>
                    </div>
                </td>
                <td align="center">
                    <div>
                        <?php
                            $data = $connect->query($query_2);
                            if($data) {
                                while($row = $data ->fetch_assoc()){
                                    print "<img margin-top=10px width=50px height=50px src='./images/".$row['Image']."'>";
                                }
                            }
                        ?>
                        <br>
                        <a href="#">View Product Description</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="infor_purchase">
        <form action="">
            <table>
                <tr>
                    <th style="width: 5%;">Status</th>
                    <th style="width: 30%;">Deliverable</th>
                    <th style="width: 55%;">Description</th>
                    <th style="width: 10%;">Price</th>
                </tr>
                <tr>
                    <td><input type="radio" name="confirm_add" id="confirm_add_1" value="download"></td>
                    <td><b>Download</b></td>
                    <td>Choose this option if you wish to download the software over the Internet</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><input type="radio" name="confirm_add" id="confirm_add_2" value="cd"></td>
                    <td><b>CD</b></td>
                    <td>Choose this option if you wish to receive CD</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><input type="radio" name="confirm_add" id="confirm_add_3" value="usb"></td>
                    <td><b>USB</b></td>
                    <td>Choose this option if you wish to receive USB</td>
                    <td>Free</td>
                </tr>
            </table>
        </form>
        <button onclick="add()">Add To Cart</button>
        <br>
        <button><a href="cart.php">View the cart</a></button>
    </div>

    <script>
        function ReadCookie(){
            var allcookies = document.cookie;

            // Get all the cookies pairs in an array
            let cookiearray = allcookies.split(';');
            let value = "";
            // Now take key value pair out of this array
            for(var i=0; i<cookiearray.length; i++){
                name = cookiearray[i].split('=')[0];
                    if(name === "prod"){
                        value = cookiearray[i].split('=')[1];
                    }
            }
            return value;
        }
        function add(){
            var radios = document.getElementsByName("confirm_add");
            for (var i = 0, length = radios.length; i < length; i++) {
                if (radios[i].checked) {
                    var status = radios[i].value;
                }
            }
            var name = document.querySelectorAll(".information ul li")[0].innerHTML.replace("<b>Product Name: </b>", "");
            let value = name + "-" + status;
            if (ReadCookie()===""){
                document.cookie = "prod=" + value;
                alert("Add "+name+ " successfully");
            }
            else if (ReadCookie().includes(name)){
                alert(name+" had existed in cart!");
            }
            else{
                let value_pass = ReadCookie();
                document.cookie = "prod=" + value_pass +"&" +value;
                alert("Add "+name+ " successfully");            }
        }
    </script>
</body>
</html>