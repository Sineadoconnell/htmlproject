<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
 
        <title>RECEIPT</title>
    
    
    
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        
        
        
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        
        
        <center>
        
        <a href="homepage.html" class="btn btn-success"> Home</a>
        </center>
    </body>
</html>