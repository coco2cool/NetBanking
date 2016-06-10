<?php
include("header.php");
include("dbconnection.php");
$loantypearray = mysql_query("select * from loanpayment");
?>		
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
    <table width="901" border="1">
      <tr>
        <th width="105" scope="col">PAYEMENT ID</th>
        <th width="93" scope="col">DATE</th>
        <th width="101" scope="col">PAIDAMT</th>
        <th width="144" scope="col">PRINCIPLEAMT</th>
        <th width="188" scope="col">INTEREST AMT</th>
        <th width="132" scope="col"><p>BALANCE</p></th>
      </tr>
      <?php	
 while($loantype = mysql_fetch_array($loantypearray))
	  {
echo "
      <tr>
        <td>&nbsp;$loantype[paymentid]</td>
        <td>&nbsp;$loantype[date]</td>
        <td>&nbsp;$loantype[paidamt]</td>
        <td>&nbsp;$loantype[principleamt]</td>
        <td>&nbsp;$loantype[interestamt]</td>
        <td>&nbsp;$loantype[balance]</td>
        
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