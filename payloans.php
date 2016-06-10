<?php
session_start();
include("header.php");
include("dbconnection.php");
$result = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customer_id]'");
?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2>Loan Payment</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <p>Using this option, you can make loan payment or query your loan payments, balance details and get the current status about them.</p>
       	  </form>
          
          	
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
                     <?php
	 include("custsidebar.php");
	payloans();
	 ?> 
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
include("footer.php");
?>