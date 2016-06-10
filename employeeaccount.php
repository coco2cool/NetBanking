
<?php
session_start();
include("header.php");
?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">

     		 <table width="485" border="2" color="blue">
     		   <tr>
     		     <th width="469" scope="col"><strong>ACCOUNT </strong></th>
   		     </tr>
     		   <tr>
     		     <th scope="col">&nbsp;</th>
   		     </tr>
	       </table>
     		 
        
        <div class="cleaner_h30"></div>
  <div class="cleaner_h60"></div>
</div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
       <?php
	   include("myaccountssidebar.php");
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