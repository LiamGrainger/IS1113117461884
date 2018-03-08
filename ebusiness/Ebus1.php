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
 
 <br>
 <p align="center"><img src="https://cdn1.iconfinder.com/data/icons/social-productivity-line-art-4/128/shopping-cart2-512.png" height=100 width=100 alt="click"</p>
 <div class=title align="middle" style="font-size:180%" ><h1>Select a Product</h1>
      <br>
        <div>
          <div class="row">
  
  <!-- SALESFORCE -->
  
  <div class="column"style="background-color:#ffffff;border-left: 3px solid black; border-top: 3px solid black;border-bottom: 3px solid black;border-right: 3px solid black ;">
    <p align = center><img src="https://seeklogo.com/images/S/salesforce-logo-273F95FE60-seeklogo.com.png" height=100 width=130></p>
    <p align =center>        
                                 <input type="radio" checked onClick="disablebtnProceed()"/>
            </p>
            <p align=center><font size="5" face="Segoe UI" >  $100</font> </p>
  </div>
 
 <!-- CLOUD9 -->
  <div class="column" style="background-color:#ffffff;border-top: 3px solid black;border-bottom: 3px solid black">
    
    <p align = center><img src="https://www.mt.nl/wp-content/uploads/2011/06/d38162fb94c72618b4fd6e4b3d384655-1308735004.png" height=100 width=100 ></p>
                                 <p align =center>
                                  <input type="radio" onClick="disablebtnProceed()"/>
                                  
                               </p>
                               <p align=center><font size="5" face="Segoe UI" >  $200</font> </p>
  </div>
  
  <!-- AWS -->
  <div class="column" style="background-color:#ffffff;border-right: 3px solid black; border-left: 3px solid black;border-top: 3px solid black;border-bottom: 3px solid black">
      <p align = center><img src="https://tenten.co/blog/wp-content/uploads/2011/01/Amazon-Makes-It-Easier-to-Host-a-Site-with-S3-on-the-Cheap-2.png" height=100 width= 160 ></p>
    <p align=center>
                               
                                  <input type="radio" onClick="disablebtnProceed()"/>
                        
                          
                                    </p>
                                          <p align=center><font size="5" face="Segoe UI" >  $300</font> </p>
                                         
  </div>
  
  <!-- GMAIL -->
  <div class="column"style="background-color:#ffffff; border-right: 3px solid black; border-top: 3px solid black;border-bottom: 3px solid black">
  <p align = center><img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png" height=100 width=150></p>
    <p align=center>
                                  <input type="radio" onClick="disablebtnProceed()"/>
                                 
                                </p>
                                 <p align=center><font size="5" face="Segoe UI" >  $300</font> </p>
  </div>
</div>
                            
                    
                              <form method="POST" action="Ebus2.php">
                                <!-- These are the Radio-Button Options for the Products -->
                              
            
                                
                               
                                    
 
                                
                                    

                                
                                
        </div>
            
            <!-- The Rundown of Costs -->
            
            
            <div id="divWrapper">
  <div id="divHeader">
   <img src="http://www.myiconfinder.com/uploads/iconsets/256-256-ce95e9d2e86faee8a3a511af826f891e.png" height=100 width =100>
   <h1 style=font-size:18px>Summary</h1>
   <div id="divNavBartwo"> <img src="https://pbs.twimg.com/profile_images/791306253813354496/XXU9JV0o_400x400.jpg" height=50px width=50px>
   <br>
    <label for="subtotal">
                                  Sub Total &#8212;
                                  <input type="text" value="0.00" readonly/>
                                </label>
   <br>
   <hr>
    <label for="discount">
                                  Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
                                   </br>
                                  (- Discount)
                                </label>
                                <br>
   <hr>
   <label for="vat">
                                  VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="vat" name="vat" value="0.00" readonly/>
                                 ( + VAT)
                                </label>

   <br>
   <hr>
  <label for="total">
                                  Total
                                  <input type="text" id="total" name="total" value="0.00" readonly/>
                                   </br>
                                  (- Discount + VAT)
                                </label>
   <br>
   <hr>

   
   
   
   
   
   </div>
      
     
    
   </div>
  </div>
 
 
            
        
        
        <div class="shoppingcart"> 
             
              <button class="shoppingcartstyle" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
               
        </div>  
              
          </form>

          <!-- Calculate the Costs Button -->  
          
          <button class="calcbutton" onClick="calcSub()">Calculate Cost</button>
             
            
          <!-- Clear Button -->    
          <a class="cancelbutton" role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>