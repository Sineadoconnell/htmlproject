/* global $ */

function validateDetails(){
    var name;
    var email;
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
        
         name = document.getElementById("user_name").value;
    
    if (name==""){
        alert("Please enter your name");
        }
    else if (String(name).length<25){
        alert("Please make sure your name is accurate");
        }
    else{
        enablebtnPurchase();
        }
}
        
        
        
        
        
        
        
        
        
        
        
        
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
