<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel ="stylesheet" href="Ebus.css" type = "text/css" />
        
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
      <style>
     
  </style>
     </head>
   
        
        
        <center>
            <Stong><h1>Receipt</h1></Stong></center>
        
        <div class="details">
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
        </div>
        
        </div>
        </center>
        <center>
          <a href="homepage.html" class="btn btn-success">Home</a>
        </center>
    </body>
    </html>