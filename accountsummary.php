<?php
session_start();
include("header.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM accounts WHERE  customer_id='$_SESSION[customerid]'");
?>
<div id="templatemo_main"><span class="main_top"></span> 
     	
<div id="templatemo_content">
	  <h2 align="center">ACCOUNTS SUMMARY</h2>
     		 <table width="616" border="1">
     		   <tr>
     		     <th scope="col">ACCOUNT TYPE</th>
     		     <th scope="col">NAME</th>
     		     <th scope="col">ACCOUNT NUMBER</th>
     		     <th scope="col">BRANCH</th>
     		     <th scope="col">CURRENCY</th>
     		     <th scope="col">A/C BALANCE</th>
   		     </tr> 
             <?php
			 while($arrow = mysql_fetch_array($results))
			{
				echo "<tr><td>$arrow[accounttype]</td>
     		     <td>$_SESSION[customername]</td>
     		     <td>$arrow[accno]</td>
     		     <td>$_SESSION[ifsccode]</td>
     		     <td>INR</td>
     		     <td>$arrow[accountbalance]</td></tr>";
			}
		   ?>
     		 </table> <p>&nbsp;</p>
       <p>&nbsp;</p>
        
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