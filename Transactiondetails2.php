<?php
include("header.php");
include("dbconnection.php");
$rectrans=mysql_query("select * from transactions where transactionid='$_GET[transactionid]'");
$recs = mysql_fetch_array($rectrans);

$rectransa=mysql_query("select * from registered_payee where accountnumber='$recs[receiveid]'");
$recsa = mysql_fetch_array($rectransa);
?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2>Transaction Details</h2>
									
        	<form id="form1" name="form1" method="post" action="">
        	  <table width="677" border="1">
        	    <tr>
        	      <td height="32" colspan="2"><a href="Transactionmade.php?pst=Complete"><strong>&lt;&lt; Back</strong></a></td>
       	        </tr>
        	    <tr>
        	      <td width="289" height="32">Tansaction Number</td>
        	      <td width="346"><?php echo $recs[trans_id]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Particulars<br />
        	        <br /></td>
        	      <td><?php echo $recs[particulars]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Credit account number</td>
        	      <td>&nbsp;<?php echo $recs[receiver_id]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Payee name</td>
        	      <td>&nbsp;<?php echo $recsa[payee_name]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Account type</td>
        	      <td>&nbsp;<?php echo $recsa[acc_type]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Bank name</td>
        	      <td>&nbsp;<?php echo $recsa[bank_name]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">IFSC Code</td>
        	      <td>&nbsp;<?php echo $recsa[ifsc_code]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="23">&nbsp;</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td height="31">Debit Account number</td>
        	      <td><?php echo $recs[payee_id]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="32">Transaction date</td>
        	      <td><?php echo $recs[trans_datetime]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Approval date</td>
        	      <td>&nbsp;<?php echo $recs[approve_datetime]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Transaction Amount</td>
        	      <td>&nbsp;<?php echo $recs[amount]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="31">Commission</td>
        	      <td>&nbsp;<?php echo $recs[commission]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="23">&nbsp;</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td height="31">Transaction Type</td>
        	      <td><?php echo $recs[payment_status]; ?></td>
      	      </tr>
       	    </table>
<form>
<input type="button" value="Print" onClick="window.print()">
</form>
       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->

        <div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
include("footer.php");
?>