<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel ="stylesheet" href="Ebus.css" type = "text/css" />
        
        <script type="text/javascript" src="cost_calc.js"></script>
   
   <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
   
   
   
   
      <style>
      
    </style>
    
    </head>
       
        <center>
       
       
        
        
        <!--- Creating my form to Select a product --->
          <form name="myForm" method="POST" onsubmit="return validateForm()" action="Ebus2.php">
        
            <h3>Select a product</h3>
            
           
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
             </br>
              </br>
            
             <label for="cloud">
                <input type="radio" id="cloud" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
          
              </br>
                </br>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            
            </br>
              </br>
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                Gmail @ $250
            </label>
            
              </br>
         </br>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
          </br>
            </br>
            
             <label for="discount">
              Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
              </br>
                </br>
              
            <label for="vat">
               Vat @ 10% 
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            </br>
              </br>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            
            </br>
            </br>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        <!-- Adding Buttons -->
        <br/>
        <button onClick="calcSub()" class="btn btn-success">Calculate Cost</button>
        <a role="button" href="Ebus1.php"   class="btn btn-success">Clear Choice</a>
        
        </center>
       
        
    </body>
</html>