<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<center>     
<ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="/Interests/Cloud.html">Interests</a></li>
  <li><a href="/ebusiness/Ebus1.php">E Business</a></li>
  <li><a href="/cv_page1.html">CV pages</a></li>
</ul>
 </center>       
    </head>
    <body>
        <center>
        <div class="header">
  <h1 class="mainheading">Payment Page</h1>
</div>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                
                    <label for="card_number">Card Number: </label>
                    <input type="password" id="Card_Number" placeholder="Card Number" maxlength="16">
                    <br>
                    <label for="user_pin">PIN: </label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br>
                <button type="submit"  id="btnPurchase" disabled>Proceed with Purchase</button>
                
              
            </form>
            
            <br/>
             <a href="../homepage.html" class="btn button">Cancel Payment</a>
            <button onClick="validateDetails()" class ="btn btn-dark">Validate</button>
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
             $_SESSION["discount"] = $_POST["discount"];
            $_SESSION["vattotal"] = $_POST["vattotal"];
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["fullname"] = $_POST["fullname"];
            $_SESSION["email"] = $_POST["email"];
            ?>
            
        </div>
        </center>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>