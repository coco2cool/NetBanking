<?php
session_start();
include("header.php");
include("dbconnection.php");
$result = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customer_id]'");
?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2>&nbsp; Fund Transfer</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <p>Fund Transfer menu provide you to make fund transfers between your different accounts as well as making a transfer to a third party. You can even make an enquiry about your transfers and view the pending transfers through this menu.</p>
       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
                     <?php
	 include("custsidebar.php");
	transferfunds();
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