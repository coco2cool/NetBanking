<?php
include("header.php");
include("dbconnection.php");
$accarray = mysql_query("select * from accounts");

?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
 <table width="500" border="1">
      <tr> 
        <th scope="col">ACCOUNT NO</th>
        <th scope="col">CUSTOMER ID</th>
        <th scope="col">ACCSTATUS</th>
        <th scope="col">PRIMARY ACCOIUNT</th>
        <th scope="col">ACCOPENDATE</th>
        <th scope="col">ACCOUNT TYPE</th>
        <th scope="col">ACCOUNT BAL</th>
        <th scope="col">UNCLEAR BAL</th>
        <th scope="col">ACCURED INTEREST</th>	
      </tr>
      <?php	
 while($account = mysql_fetch_array($accarray))
	  {
echo " <tr>
        <td>&nbsp;$account[accno]</td>
        <td>&nbsp;$account[customer_id]</td>
        <td>&nbsp;$account[accstatus]</td>
        <td>&nbsp;$account[primaryacc]</td>
        <td>&nbsp;$account[accopendate]</td>
        <td>&nbsp;$account[accounttype]</td>
        <td>&nbsp;$account[accountbalance]</td>
        <td>&nbsp;$account[unclearbalance]</td>
        <td>&nbsp;$account[accuredinterest]</td>
      </tr>";
	  }
	  ?>
    </table>
  </div><!-- end of content -->
            
            
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>