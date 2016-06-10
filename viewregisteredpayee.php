<?php
include("header.php");
include("dbconnection.php");
$regdarray = mysql_query("select * from registerdpayee");
?>		
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
    <table width="901" border="1">
      <tr>	
        <th width="105" scope="col">SL NO</th>
        <th width="93" scope="col">PAYEE NAME</th>
        <th width="101" scope="col">ACCOUNT NUMBER</th>
        <th width="144" scope="col">ACCOUNT TYPE</th>
        <th width="188" scope="col">BANK NAME</th>
        <th width="132" scope="col"><p>IFSC CODE</p></th>
      </tr>
      <?php	
 while($regd = mysql_fetch_array($regdarray))
	  {
echo "
      <tr>
        <td>&nbsp;$regd[slno]</td>
        <td>&nbsp;$regd[payeename]</td>
        <td>&nbsp;$regd[accountnumber]</td>
        <td>&nbsp;$regd[accountnumber]</td>
        <td>&nbsp;$regd[bankname]</td>
        <td>&nbsp;$regd[ifsccode]</td>
        
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