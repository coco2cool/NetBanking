<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_POST["adda"]))
{
$sql="INSERT INTO loanpayment (payment_id,	customer_id,	loan_amt,	interest,	total_amt,	paid,	balance,	paid_date)
VALUES
('$_POST[payment_id]','$_POST[customer_id]','$_POST[loan_amt]','$_POST[interest]','$_POST[total_amt]','$_POST[paid]','$_POST[balance]','$_POST[paydate]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if(isset($_POST["update"]))
{
	mysql_query("UPDATE loanpayment SET payment_id='$_POST[payment_id]',	customer_id='$_POST[customer_id]',	loan_amt='$_POST[loan_amt]',	interest='$_POST[interest]',	total_amt='$_POST[total_amt]',	paid='$_POST[paid]',	balance='$_POST[balance]',	paid_date='$_POST[paydate]' WHERE payment_id='$_POST[payment_id]'");
	

$updt= mysql_affected_rows();
if($updt==1)
{
$successresult="Record updated successfully";
}
}

$result = mysql_query("select * from loanpayment where customer_id='$_SESSION[customer_id]'");
?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2>&nbsp;View Loan Payment</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <table align="CENTER" width="617" height="70" border="1" bordercolor="#87158A"CELLSPACING="2">
        	    <tr>
        	      <td width="63" height="42"><strong>Payment ID</strong></td>
        	   
        	      <td width="90"><strong>Loan amount</strong></td>
        	      <td width="56"><strong>Interest</strong></td>
        	      <td width="90"><strong>Total amount</strong></td>
        	      <td width="54"><strong>Paid</strong></td>
        	      <td width="70"><strong>Balance</strong></td>
        	      <td width="118"><strong>Paid date</strong></td>

      	      </tr>
              <?php
			  while($arrvar = mysql_fetch_array($result))
			  {
        	   echo " <tr>
        	      <td height='46'>$arrvar[payment_id]</td>
				  <td>$arrvar[loan_amt]</td>
        	      <td>$arrvar[interest]</td>
				   <td>$arrvar[total_amt]</td>
				    <td>$arrvar[paid]</td>
					 <td>$arrvar[balance]</td>
					  <td>$arrvar[paid_date]</td>
      	      </tr>";
			  }
			  ?>
      	    </table>
        	  <p>&nbsp;</p>
       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
            
                <?php
				include("custsidebar.php");
				payloans();
				?>
              <div class="cleaner_h40"></div>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
include("footer.php");
?>