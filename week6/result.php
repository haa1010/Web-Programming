<?php

        function newData() {
            $insert = 0;
        }

?>

<html>
    <head></head>
    <body>
        <p>Record inserted as show as below</p>
                <p>Selected category values are highlight</p>
                <form >
                    <div style="display:inline-flex">
                        <select name="select[]" size="5" multiple="multiple" disabled="true" tabindex="1" style="width:200px">;
                            <?php
            foreach ($cat as $category) {
                    print " <option>$cat</option>";?>
           </select>
                        <div style="width:450px;margin-left:20px" >
                            <div style="display: inline-flex">
                                <div style="width:110px">
                                    <label > Business Name:</label>
                                </div>
                                <input type="text" name="name" value="
                             <?php  echo $name;?>"
                      </div>

                            <div style='display: inline-flex'>
                                <div style="width:110px">
                                    <label>Address:</label>
                                </div>
                                <input type="text" name="address" value=';<?php echo $addr;?>'/>
                            </div>

                            <div style='display: inline-flex'>
                                <div style="width:110px">
                                    <label> City:</label>
                                </div>
                                <input type="text" name="city" value="<?php echo $city;?>"/>
                            </div>
                            <div style='display: inline-flex'>
                                <div style="width:110px">
                                    <label> Telephone:</label>
                                </div>
                                <input type="text" name="telephone" value="<?php echo $tel;?>"/>
                            </div>
                            <div style='display: inline-flex'>
                                <div style="width:110px">
                                    <label> URL:</label>
                                </div>
                                <input type="text" name="url" value="<?php echo $url;?>"/>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit"  onclick="newData()" value="Add other bussiness"/>
                    </div>
                </form>
            </div>
        
        
    </body>
</html>
