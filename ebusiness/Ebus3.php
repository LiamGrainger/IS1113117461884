<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <!-- Code for the Receipt using Divs as Desing -->
                <head>
                    <title>Receipt</title>
                    
        <style>
        .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #ffffff;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }
            /* This code will design the Individual Options */
            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #000000;
                display: block;
                transition: 0.3s;
            }
            /* This will give the Hover Effect on each Option */
            .sidenav a:hover {
                color: #5c5c5c;
            }
            /* This will create the close button in the top right of the Nav-Bar */
            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }
                    
                    /* Background Image */
                         body {
                 background-image: url("https://cdn.shutterstock.com/shutterstock/videos/12361562/thumb/1.jpg");
                 background-repeat:repeat;
               
                /* Same Div Desing for the Receipt Page */
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
                                 font-family: "Segoe UI";
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
        <!-- This is the Code , including the JavaScript needed to close the Nav-Bar, for the links to each Option -->
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          </br>
          </br>
          <hr>
          <a href="homepage.html">Home</a>
         <hr>
         <a href="cv/cv_page1.html">CV</a>
          <hr>
           <a href="../ebusiness/EbusMenu.html">E-Business</a>
           <hr>
            <a href="../interests/ihomepage.html">Interests</a>
            <hr>
         <a href="https://dashboard.heroku.com/apps/is1113117461884">Heroku</a>
         <hr>
         <a href="https://github.com/LiamGrainger/IS1113117461884/graphs/commit-activity">Github</a>
        
         <hr>
         <!-- Also include are <hr> tags which will add a more indentifiable division between each Option -->
  
    </div>

                <!-- This is how the Nav Bar will Open -->
                  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                          <br>
                          <br>
                          <br>
        
                     <div id="divWrapper">
                  <div id="divHeader">
                   <img src="https://image.flaticon.com/icons/png/512/19/19973.png" height=100 width =100>
                   <h1 style=font-size:18px>Order Confirmation</h1>
                   <p align= "center"> #23402</p>
  
  
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
          
                       <img src ="https://d30y9cdsu7xlg0.cloudfront.net/png/6020-200.png" height=100 width =100>
                     <h3>&Agrave; Bient&ocirc;t</h3>
          
                         <p align ="center">Your Order #23402 will be processed shortly and will be available at the domain sent to your e-mail. We hope this won't be the last time you do business with us. So we won't say Goodbye, just a 'See you Soon'.</p>
                         <p align ="center">Be sure to subscribe to our Mailing list and to follow our numerous Social Media Platforms. Thank you for your Business.</p>
                   </div>
                  </div>
                      <br>
                      <script>
            /* This is the Open Nav Function */
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                document.body.style.backgroundColor = "rgba(0, 0, 0, 1)" ;
            }
            /* This is the Close Nav Function */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
                document.body.style.backgroundColor = "white";
            }
</script>
        </body>
</html>