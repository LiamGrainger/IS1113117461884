<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
    </head>
    <body>
        <h4 class="rheading">Receipt</h4>
        
        <?php  
        // putting in variables 
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="username">
            <?php
            // carrying over username
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="email">
            <?php
            // carrying over email
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="total">
            <?php
            // carrying over total
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
        </br>
        <p >
            <strong>Your Purchase has gone true</strong>
        </p>
        </br>
       
        <div>
            
        </div>
        
        
        
    </body>
</html>