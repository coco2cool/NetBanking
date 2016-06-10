<?php
session_start();
include("header.php");
include("dbconnection.php");

?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<form id="form1" name="form1" method="post" action="">
  

     
            <h2>&nbsp; Transaction Detail:</h2>
              <table width="517" height="220" border="1">
                <tr>
                  <td width="439" align="center"><h4><?php 
				  
				  echo "Transaction successfull..
				  <br>
				  Branch manager will verify your account..."; 
				  
				  ?>
                  <br />
                  
                  </h4>
                  
                  </td>
                </tr>
              </table>
              
          
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