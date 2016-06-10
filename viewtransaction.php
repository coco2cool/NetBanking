<?php
include("header.php");
include("dbconnection.php");
$transactionarray = mysql_query("select * from transaction");
?>		
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
  <table width="883" border="1">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
  </table>
    <table width="933" border="1">
      <tr>	
        <th width="120" scope="col">TRANSACTION ID</th>
        <th width="112" scope="col">TRANSACTION DATE</th>
        <th width="95" scope="col">PAYMENT DATE</th>
        <th width="60" scope="col">PAYEE ID</th>
        <th width="95" scope="col">RECEIVER ID</th>
        <th width="167" scope="col">DEBIT ACCOUNT</th>
        <th width="104" scope="col">AMOUNT</th>
        <th width="128" scope="col"><p>PAYMENT STATUS</p></th>
      </tr>
      
      <?php	
 while($transaction = mysql_fetch_array($transactionarray))
	  {
echo "
      <tr>
        <td>&nbsp;$transaction[transactionid]</td>
        <td>&nbsp;$transaction[transactiondate]</td>
        <td>&nbsp;$transaction[paymentdate]</td>
        <td>&nbsp;$transaction[payeeid]</td>
        <td>&nbsp;$transaction[receiveid]</td>
        <td>&nbsp;$transaction[debitac]</td>
        <td>&nbsp;$transaction[amount]</td>
		<td>&nbsp;$transaction[paymentstat]</td>
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