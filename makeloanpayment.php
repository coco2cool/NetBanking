<?php
session_start();
?>

<script>
function validateForm()
{
var x=document.forms["form1"]["trpass"].value;
var y=document.forms["form1"]["password"].value;

if (x==null || x=="")
  {
  alert("User id must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
<?php
include("header.php");
include("dbconnection.php");
$result = mysql_query("select * from loan WHERE customer_id='$_SESSION[customer_id]'");

$acc= mysql_query("select * from accounts where customer_id='$_SESSION[customer_id]'");

?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<form id="form1" name="form1" method="post" action="makeloanpayment2.php" onsubmit="return validateForm()">
          
              <h2>Pay loan</h2>
           	  <table width="513" height="177" border="1">
        	    <tr>
        	      <td><strong>Loan Account Number</strong></td>
        	      <td><label>
                  
        	        <select name="payto" id="payto">
                    <option value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
        	        	<?php
					  while($arrvar = mysql_fetch_array($result))
			  			{
						echo "<option value='$arrvar[loan_no]'>$arrvar[loan_no]</option>";
			  			}
			 		 ?>
      	            </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Enter the amount : </strong> </td>
        	      <td><label>
        	        <input type="text" name="pay_amt" id="pay_amt" />
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Select Account number to pay</strong></td>
        	      <td><label>
        	        <select name="ac_no" id="ac_no">
                     <option value="">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
        	 			<?php
						while($rowsacc = mysql_fetch_array($acc))
						{
							echo "<option value='$rowsacc[accno]'>$rowsacc[accno]</option>";
						}
						?>
      	            </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2"><div align="right">
        	        <input type="submit" name="pay" id="pay" value="Pay" />
        	      </div></td>
       	        </tr>
      	    </table>
       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
                <?php
				include("custsidebar.php");
				payloans();
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