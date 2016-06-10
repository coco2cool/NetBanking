<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_POST[pay]))
{
$payto = $_POST[payto];
$payamt = $_POST[pay_amt];
$payacno= $_POST[ac_no];
}

$result = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customerid]'");

$result1 = mysql_query("select * from registered_payee WHERE payeename='$payto'");
$arrpayment = mysql_fetch_array($result);

$dt = date("Y-m-d h:i:s");

$resultpass = mysql_query("select * from customers WHERE customerid='$_SESSION[customerid]'");
$arrpayment1 = mysql_fetch_array($resultpass);

if(isset($_POST["pay2"]))
{

	if($_POST[trpass] == $arrpayment1[transpasword])
	{
		$sql="INSERT INTO transactions
		(payeeid,receiveid,amount,commission,particulars,Transaction_type,transactiondate,paymentdate,paymentstat)
		VALUES
		('$_POST[payeeid]','$_POST[paytoo]','2000.00','0','$_POST[paytoo] Onlinetransaction $dt','Online','$dt','$dt','Pending')";
		
				if (!mysql_query($sql,$con))
				  {
				  die('Error: ' . mysql_error());
				  }
				if(mysql_affected_rows() == 1)
				  {
					$successresult = "Transaction successfull";
					header("Location: Makepayment3.php");
				  }
				else
				  {
					  $successresult = "Failed to transfer";
				  }
	}
	else
	{
	$passerr = "<b>Invalid password entered...<br> Please re-enter transaction password</b>";
	$payto = $_POST[paytoo];
	$payamt = $_POST[amt];
	$payacno= $_POST[payeeid];
	}		  
}


$acc= mysql_query("select * from accounts where customer_id='$_SESSION[customerid]'");

?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<form id="form1" name="form1" method="post" action="Makepayment2.php">
  

      
     	<h2>&nbsp;Make payment to <?php echo $arrpayment[payeename]; ?></h2>
              <table width="564" height="220" border="1">
                <?php
				if($passerr != "")
				{
					?>
                <tr>
                  <td colspan="2">&nbsp;<?php echo $passerr; ?></td>
                </tr>
                <?php
				}
				?>
                <tr>
                  <td width="203"><strong>Pay to</strong></td>
                  <td width="322">
				  <?php
				echo "<b>&nbsp;Payee Name : </b>".$arrpayment[payeename];
				echo "<br><b>&nbsp;Account No. : </b>".$arrpayment[accountnumber];
				echo "<br><b>&nbsp;Account type : </b>".$arrpayment[accounttype];
				echo "<br><b>&nbsp;Bank name : </b>".$arrpayment[bankname];
				echo "<br><b>&nbsp;IFSC Code : </b>".$arrpayment[ifsccode];
	
                  ?>
                  
<input type="hidden" name="paytoo" value="<?php echo $payto; ?>"  />
<input type="hidden" name="amt" value="<?php echo $payamt; ?>"  />
<input type="hidden" name="payeeid" value="<?php echo $payacno; ?>"  />
				  </td>
                </tr>
                <tr>
                  <td><strong>Payment amount</strong></td>
                  <td>&nbsp;<?php echo number_format($payamt,2); ?></td>
                </tr>
                <tr>
                  <td><strong>Account number</strong></td>
                  <td>&nbsp;<?php echo $payacno; ?></td>
                </tr>
                <tr>
                  <td><strong>Enter Transaction Password</strong></td>
                  <td><input name="trpass" type="password" id="trpass" size="35" /></td>
                </tr>
                <tr>
                  <td><strong>Confirm Password</strong></td>
                  <td><input name="conftrpass" type="password" id="conftrpass" size="35" /></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="right">
                    <input type="submit" name="pay2" id="pay2" value="Pay" />
                    <input name="button" type="button" onclick="<?php echo "window.location.href='alerts.php'"; ?>" value="Cancel" alt="Pay Now" />
                  </div></td>
                </tr>
              </table>
  

<p>&nbsp;</p>
        	  <p>&nbsp;</p>
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