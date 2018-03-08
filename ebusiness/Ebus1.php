<!DOCTYPE html>
<html>
    <head>
        <title>Shop</title>
       
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <style>
         body {
 background-image: url("https://www.freevector.com/uploads/vector/preview/19766/8-06.jpg");
 background-size: contain;

               }
* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
#divWrapper {
 width: 100%;
}

#divHeader {
 width: 600px;
 border-style: solid;
 background-color: #ffffff;
 padding: 5px;
margin: 5px auto;
 text-align:center;
}

#divNavBar {
width: 550px;
background-color: #ffffff;
padding: 15px;
margin: 5px auto;
}

#divContent {
 width: 500px;
font-family: "Segoe UI";
font-size: 30px;
 padding: 5px;
 margin: 5px auto;
}
#divContentTwo {
 width: 500px;
font-family: "Segoe UI";
font-size: 10px;
 padding: 5px;
 margin: 5px auto;
}
h1 {
    position: relative;
    font-size: 30px;
    z-index: 1;
    overflow: hidden;
    text-align: center;
    font-family: "Segoe UI";
}
h1:before, h1:after {
    position: absolute;
    top: 51%;
    overflow: hidden;
    width: 50%;
    height: 3px;
    content: '\a0';
    background-color: black;
}
h1:before {
    margin-left: -50%;
    text-align: right;
}
 }
                #divWrapper {
                 width: 100%;
                }
                /* This is the Header for the Div */
                #divHeader {
                 width: 600px;
                 border-color: black;
                 border-style: inset;
                 background-color: #FFFFFF;
                 padding: 5px;
                margin: 5px auto;
                 text-align:center;
                }
                
                #divNavBartwo {
                width: 550px;
                border-color: black;
                border-style: none;
                background-color: #FFFFFF;
                padding: 15px;
                margin: 5px auto;
                }
</style>

    </head>
    
    <body>
   <h1 style="background-color:white;" class="mainheading"> Shop </h1>
        </br>
        <ul>
           <li> <a class="active" href="Homepage"> Home </a></li>
           <li> <a class="active" href="ebusiness/business.html"> Business Home </a></li>
           <li> <a class="active" href="info.html"> About Us </a></li>
           
        
        
       </ul>
       
       <br/>
       
       <h2>Please Select a Product</h2>
       <br/>
        
        <form method="POS1" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onclick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            <br/>
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            <br/>
            <br/>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product"  onclick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            <label for "aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ 300$
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="vat">
                VAT @ 10%
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="vat" value="0.00" readonly/>
            </label>
             
             <br/>
             <br/>
             <label for="total">
                 Total
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="total" name="total" value="0.00" readonly/>
             </label>
             
        <br/>
        <br/>
        <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
             
        </form>
        
       <br/>
       
       
        <button onclick="calcSub()">Calculate Cost</button>
    </body>
</html>