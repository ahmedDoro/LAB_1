
<?php
/**
 * Created by PhpStorm.
 * User: 1600574
 * Date: 28/02/2017
 * Time: 15:26
 */

?>
<!DOCTYPE html>
  <html> 
    <head> 
        <title>selfreference</title> 
    </head> 
    <body> 
    <?php
        if($_SERVER['REQUEST_METHOD']== 'GET'){
        ?>
         <form action=“<? echo "$_SERVER[‘PHP_SELF']"; ?>" method="post"> 
             <label>Forename</label> 
             <input type="text" name="forename"> 
             <label>Surname</label> 
             <input type="text" name="surname"> 
             <p><input type="submit" value="Submit"></p> 
         </form> 
        <?
         }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
             
            // execute if requested using HTTP POST Method 
            $forename = $_POST["forename"];
             
            $surname = $_POST["surname"];
             
            print("<h1>Hello {$forename} {$surname}</h1>");
             
        }

?>