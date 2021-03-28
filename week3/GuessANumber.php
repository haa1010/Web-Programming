<html>
    <head><title>Guess a number</title></head>
    <body>
        <?php
        $rand= rand(0, 100) ;
              $ans=-2;  
             
                
 do{  ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            
        <input  type="text" name="randnumber">
       <input type="submit" value="SUBMIT">
      </form>
        
            <?php 
        $ans=$_POST["randnumber"];
        if(!is_numeric($ans)){
            print("you must enter a number"); continue;
        }
        elseif($ans<$rand){
         print("Wrong. Please try a higher number. You have guessed 1 time!");                 continue;
        
        
        }
        elseif($ans>$rand)
        {
                       print("Wrong. Please try a lower number. You have guessed 1 time!");
                        continue; 
        }
        else print("bingo!!");
        
 }
while($ans!=-2) ?>
        
 
        
        
         </form>
    </body>
</html>

