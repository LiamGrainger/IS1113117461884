<?php
// Start the session
            session_start()
?>
        <!DOCTYPE html>
<html>
    <head>
                    <title>Details</title>
                    
                    <!--jQuery-->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
                        
                    </script>
                    <script type="text/javascript" src="ebus2_validator.js">
                            
                    </script>
        
    <style>
                              body {
                     background-image: url("https://www.freevector.com/uploads/vector/preview/19766/8-06.jpg");
                     background-size: contain;
                    
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
                                     align-items: center;
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
                                    
                </style>
            </head>
    
        <body>
        
                          <form action="Ebus3.php" method="POST">
                            <br>
                            <br>
                            <br>
                            <br>
                         <div id="divWrapper">
                          <div id="divHeader">
                           <img src="https://cdn4.iconfinder.com/data/icons/shopping-33/128/_confirm_wallet-512.png" height=100 width =100>
                           <h1 style=font-size:18px>Confirm your Payment</h1>
                           <br>
                        <p align ="center">
                            <label for="user_name">
                                                    <input class="inputname" type="name" id="user_name" name="user_name" placeholder="John Smith">
    
                            </label>
                        </p>

                         <br>
  
                      <p align ="center">
                           <label for="user_email" class="labelemail">
                                 <input class="inputemail" type="email" id="user_email" name="user_email" placeholder="email@ucc.ie">
                            </label>
                        </p>
   
               <br>
              <p align ="center"> 
                          <label for="user_pin" class="labelpin">
                                   
                                    <input class="inputpin" type="password" id="user_pin" name="user_pin" placeholder="****" maxlength="4" pattern="\d{4}"> 
                                   
                                   
                           </label>
               </p>
                                <br>
                                <br>
                                 <hr size="3" color=black>
                                 <button class="Validate" onClick="validateName()">Validate Details</button>
                        <p align ="center"><button class="ProceedPurchase" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button></p>
       </form>
  
    
                        <?php  
                        // Set session variables
                          $_SESSION["total"] = $_POST["total"];
                          
                        ?>
                
                   </div>
                  </div>
        </body>
</html>