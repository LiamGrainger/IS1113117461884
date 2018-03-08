<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
    </head>
    
    <body>
        
        <h4>Enter your Details</h4>
        
        <form action="Ebus3.php" method="POST">
            
                            <label for="user_name">
                                Name:
                                <input class="inputname" type="name" id="user_name" name="user_name" placeholder="Joe Bloggs">
                                </br>
                            </label>
            
            
            
                                <label for="user_email" class="labelemail">
                                    Email address:
                                    <input class="inputemail" type="email" id="user_email" name="user_email" placeholder="joebloggs@ucc.ie">
                                </label>
            
          

                                <label for="user_pin" class="labelpin">
                                    PIN:
                                    <input class="inputpin" type="password" id="user_pin" name="user_pin" placeholder="****" maxlength="4" pattern="\d{4}">
                                    </br>
                                    (Please only enter numbers for your PIN)
                                </label>
        
            
                            <button class="ProceedPurchase" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        
        
        <button class="Validate" onClick="validateName()">Validate Details</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
        
    </body>
</html>