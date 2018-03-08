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
                        font-family: "Segoe UI";
                }
                
                #divNavBartwoo {
                width: 550px;
                border-color: black;
                border-style: none;
                background-color: #FFFFFF;
                padding: 15px;
                margin: 5px auto;
                font-family: "Segoe UI";
                font-size: 12px;
                }
</style>

    </head>
    
    <body>
  
       
       
       
       
        
        <form method="POS1" action="Ebus2.php">
         <p align="center"><img src="http://www.microsys.ch/wp-content/uploads/2015/09/Einkaufswagen-weitere-Produkte-1024x777.png" alt="clouds" height="140" width="150"></p>
             <div class=title align="middle" style="font-size:180%" ><h1> Choose your Product </h1>
 <div class="row">
  
  <!-- SALESFORCE -->
  <div class="column" style="background-color:#ffffff;border-left: 3px solid black; border-top: 3px solid black;border-bottom: 3px solid black;border-right: 3px solid black ;">
    <h2 align = "center"> <img src="https://seeklogo.com/images/S/salesforce-logo-273F95FE60-seeklogo.com.png" height=100 width =100></h2>
    <hr size="3" color=black>
    <p align= "middle">  <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onclick="disablebtnProceed()"/>
                $100
            </label>
            </p>
  </div>
  
  
  <!-- CLOUD9 -->
  <div class="column" style="background-color:#ffffff;border-top: 3px solid black;border-bottom: 3px solid black">
    <h2 align = "center"><img src="http://sciezkaprogramisty.pl/wp-content/uploads/2018/02/AWSCloud9_logo_color_400x400.png" height=100 width =100></h2>
    <hr size="3" color=black>
    <p align= "middle"> 
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                $200
            </label></p>
  </div>
  <!-- AWS-->
  
  <div class="column" style="background-color:#ffffff;border-right: 3px solid black; border-left: 3px solid black;border-top: 3px solid black;border-bottom: 3px solid black">
    <h2 align = "center"><img src="https://a0.awsstatic.com/main/images/logos/aws_logo_smile_1200x630.png" height=100 width =130></h2>
    <hr size="3" color=black>
    <p align = "middle">     <label for "aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                $300
            </label></p> 
  </div>
  
  <!-- GMAIL -->
  <div class="column" style="background-color:#ffffff; border-right: 3px solid black; border-top: 3px solid black;border-bottom: 3px solid black">
    <h2 align = "center"><img src="https://png.icons8.com/color/1600/gmail.png" height=100 width =100></h2>
    <hr size="3" color=black>
    <p align= "middle">   
             <label for="gmail">
                <input type="radio" id="gmail" name="product"  onclick="disablebtnProceed()"/>
                $400
            </label>
            </p>
  </div>
</div>
         
         <br>
         <br>
         <br>
            
          <div id="divWrapper">
  <div id="divHeader">
   <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/8949-200.png" height=100 width =100>
   <h1 style=font-size:18px>Summary</h1>
   <div id="divNavBartwoo"> 
           
            <label for="subtotal">
                Sub Total
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="subtotal" value="0.00" readonly/>
            </label>
   <br>
   <br>
          <label for="discount">
                      Discount @ 5%
                      <input type="text" id="discount" value="0.00" readonly/>
                  </label>
            <br>
            <br>
            
   
            <label for="vat">
                VAT @ 10%
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="vat" value="0.00" readonly/>
            </label>
            <br>
           <br>
            <label for="total">
                 Total
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="total" name="total" value="0.00" readonly/>
             </label>
              <hr size="3" color="black">
             
               <button onclick="calcSub()">Calculate Cost</button>
              <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
 
             
        </form>
            
   
   
            <a role="button" href="Ebus1.php">Clear Choice</a>
   
   
   </div>
      
     
    
   </div>
  </div>
 
            
            
            
      
    
            
           
    </body>
</html>