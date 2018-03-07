/* global $ */

function validateName(){
    var Name;
    
    Name=document.getElementById("name").value;
    
    if(Name==""){
        alert("Please enter your name");
        
    }
    
    else{
        validateEmail();
    }
}

   
   
   
   
   
    function validateEmail(){
    
    var email;
   
     email=document.getElementById("email_address").value;
    
    
    if (email == ""){
        alert("Please enter your email correctly");
        
    }
    
    else if (validateUserEmail==false){
    alert("Please Enter a Valid Email");
    
        
    }
    
    else{
        validatepin();
}

        
    }
    
    
    
    
    
   function validateUserEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
    
    //Got code from https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
}
    
    
    
    
    
    
    
    function validatepin(){

    

    var pin;

    

    pin = document.getElementById("user_pin").value;

    

    if (pin == ""){

        alert("Please enter your PIN");
        document.form.name.focus();

    }

    else if (String(pin).length < 4){

        alert("Please make sure your PIN is accurate");
        document.form.name.focus();

    }
    else{
        enablebtnPurchase();
    }
}





function enablebtnPurchase(){

    $('#btnPurchase').prop('disabled', false);

}



function disablebtnPurchase(){

    $('#btnPurchase').prop('disabled', true);

}