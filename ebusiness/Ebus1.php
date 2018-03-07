<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script> 
<center>
    <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="/Interests/sports.html">Interests</a></li>
  <li><a href="Ebus1.php">E Business</a></li>
  <li><a href="/cv_page1.html">CV pages</a></li>
</ul>
</center>    
    </head>
    
        <div class="header">
  <h1 class="mainheading">Order Form</h1>
</div>
    
        
        <br/>
        <center>
        <form method="POST" onSubmit="return validate()" action="Ebus2.php">
             <label for="fullname">
                Full Name:
                <input type="text" id="fullname" name="fullname" checked onClick="disablebtnProceed()">
            </label>
            <label for="email">
                Email:
                <input type="email" id="email" name="email">
            </label>
            
            </br>
            </br>
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
           
            <br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $150
            </label>
            
            <br/>
            
            <label for="cloud 9">
                <input type="radio" id="cloud 9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $80
            </label>
            
            <br/>
            
            <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
                
            </label>
            
            <br/>
            <label for="discount">
                Discount Total 5%:
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
                
            </label>
            
            </br>
            
            <label for="vattotal">
                VAT Total 10%:
                <input type="text" id="vattotal" name="vattotal" value="0.00" readonly/>
                
            </label>
            
            <br/>
            
            <label for="total">
                Total:
                <input type="text" id="total" name="total" value="0.00" readonly/>
                
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
             <?php
            //Set session variables
            $_SESSION["subtotal"] = $_POST["subtotal"];
            $_SESSION["discount"] = $_POST["discount"];
            $_SESSION["vattotal"] = $_POST["vattotal"];
            $_SESSION["total"] = $_POST["total"];
            ?>
        </form>
        
        <br/>
        <a href="/homepage.html" class="btn button">Cancel Payment</a>
        <button type="submit" class="btn btn-dark" onClick="calcSub()""calcDisVatTotal()""display()">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class ="btn btn-dark">Clear Choice</a>

    </body>
    </center>
    </html>