<!DOCTYPE html>
<html>
    <head>
        <title>Select Product </title>
       
        
        <!--jQuery--->
        
         <script src"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1./jquery.min.js"></script>
      <script type= "text/javascrpit" src="cost_calc.js"><></script>
      <style>
        body{background-color: white;}
        h1{color:Purple;
        font-family:Times;}
     p   {color: black;}
    </style>
      
      </head>
      

      <body>
          
          <h4> Select a product</h4>
          </br>
          <form method="POST" action ="Ebus2.php">
          
          <label for = "Salesforce">
        
              <input type= "radio" id= "salesforce" name="product" onClick="disablebtnProceed()"/>
           Salesforce @ $10
              
          </label>
          </br>
           <label for = "AWS">
    
              <input type= "radio" id= "AWS" name="product"onClick="disablebtnProceed()"/>
           AWS @ $300
           </label>
                    </br>
          </br>
          
          
          <label for= "subtotal">
              Sub Total
              <input type "text" id= "subtotal" value="0.00" readonly/>

          </label>
          </br>
          <label for= "total">
              Total
              <input type "text" id= "subtotal" value="0.00" readonly/>
              </label>
              
              </br>
              
              <button type="submit" id="btnproceed" diasabled>Add to Shopping Cart</button>
    
     </form>
              
              
              </br>
              <button onClick="calcSub()"> Calculate Cost</button>
              <a role=-"button" href= "Ebus1.php">Clear Choice</a>

          
          
         
          
          
          
      </body>
      </html>