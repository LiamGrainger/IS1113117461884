/* global $ */

function calcSub() {
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if (document.getElementById('cloud9').checked){
      argSubTotal = 200;
    }
    else if (document.getElementById('aws').checked){
      argSubTotal = 300;
    }
    else{
      argSubTotal = 400;
    }
    
    calcDisVatTotal(argSubTotal);
}


function calcDisVatTotal(parmstotal){
  var subtotal = parmstotal;
  var discountAmt;
  var vatAmt;
  var totalPrice;

  discountAmt = (parmstotal * 0.05);
  
  vatAmt = ((parmstotal - discountAmt) * 0.1);
  
  totalPrice = ((parmstotal + vatAmt) - discountAmt);
  
  display(subtotal, discountAmt, vatAmt, totalPrice);
}


function display(val1, val2, val3, val4){
  
  document.getElementById("subtotal").value = val1;
  document.getElementById("discount").value = val2;
  document.getElementById("vat").value = val3;
  document.getElementById("total").value = val4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}