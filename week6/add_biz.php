<?php
$insert = 0;
$name = null;
$addr = null;
$tel = null;
$url = null;
$city = null;

function fetch_data($connect, $mydb) {

    $SQLcmd = "Select * from Categories";
    mysqli_select_db($connect, $mydb);
    $results_id = mysqli_query($connect, $SQLcmd);
    if ($results_id) {
        while ($row = mysqli_fetch_row($results_id)) {

            print '<option> ';
            print $row[1];
            print'</option>';
        }
    } else {
        die("query =$SQLcmd failed!");
        mysqli_close($connect);
    }
}
 function result(){
         
             
           
        }

$server = 'localhost';
$user = 'duonghue1';
$pass = 'duonghue';
$mydb = 'business_service';
$table_name = 'Categories';
$connect = mysqli_connect($server, $user, $pass);
if (!$connect) {
    die("Cannot connect to $server using $user");
} else {
    ?>  
    <html>
        <head><title>Business Registration</title></head>
        <body>
            <h1>Business Registration</h1>
            <div >
           <p>Click on one, or control-click on multiple categories</p>

                    <form action="add_biz.php" method="POST">
                        <div style="display:inline-flex">
                            <select name="select[]" size="5" multiple="multiple" tabindex="1" style="width:200px">
                    <?php fetch_data($connect, $mydb) ?>
                            </select>
                            <div style="width:450px;margin-left:20px" >
                                <div style='display: inline-flex'>
                                    <div style="width:110px">
                                        <label > Business Name:</label>
                                    </div>
                                    <input type="text" name='name'/>
                                </div>

                                <div style='display: inline-flex'>
                                    <div style="width:110px">
                                        <label>Address:</label>
                                    </div>
                                    <input type="text" name='address'/>
                                </div>

                                <div style='display: inline-flex'>
                                    <div style="width:110px">
                                        <label> City:</label>
                                    </div>
                                    <input type="text" name="city"/>
                                </div>
                                <div style='display: inline-flex'>
                                    <div style="width:110px">
                                        <label> Telephone:</label>
                                    </div>
                                    <input type="text" name="telephone"/>
                                </div>
                                <div style='display: inline-flex'>
                                    <div style="width:110px">
                                        <label> URL:</label>
                                    </div>
                                    <input type="text" name="url"/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Add bussiness" name="addBusiness"/>
                        </div>
                    </form>
                </div>
        <?php
       
        if (isset($_POST['name'])) {
            
            

            if (isset($_POST['select'])) {
                $category = $_POST['select'];
            }
            if (isset($_POST['name']))
            $name = $_POST['name'];
            if (isset($_POST['addr']))
            $addr = $_POST['address'];
            if (isset($_POST['city']))
            $city = $_POST['city'];
            if (isset($_POST['telephone']))
            $tel = $_POST['telephone'];
            if (isset($_POST['url']))
            $url = $_POST['url'];
             $query1='Select max(BusinessID)as id from businesses';
            mysqli_select_db($connect, $mydb);
            $results_id = mysqli_query($connect, $query1);
            if(!$results_id){$id=0;}
            else{ 
                $row = $results_id->fetch_assoc()['id'];
                $id=$row+1;}
            $query = "INSERT INTO businesses (BusinessID,Address, City,Name,Telephone,URL)VALUES ('$id','$addr','$city','$name','$tel','$url')";
            $results_id = mysqli_query($connect, $query);
            if ($results_id) {
                print "update oke";
            
               //print result here
            }
                else print "false to update";
                    }
       
?>
   
</body>
</html>

<?php }?>