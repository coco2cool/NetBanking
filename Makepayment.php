<?php
session_start();
include("header.php");
include("dbconnection.php");
$result = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customerid]'");

$result1 = mysql_query("select * from registered_payee WHERE slno='$_POST[payto]'");
$arrpayment = mysql_fetch_array($result1);
$dt = date("Y-m-d h:i:s");

$acc= mysql_query("select * from accounts where customer_id='$_SESSION[customerid]'");

?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<form id="form1" name="form1" method="post" action="Makepayment2.php">
  
     	<h2>Make Payment</h2>
           	  <table width="591" height="177" border="1">
        	    <tr>
        	      <td><strong>Pay to</strong></td>
        	      <td><label>
        	        <select name="payto" id="payto">
			
                    <option value="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </option>
        	        <?php
					  while($arrvar = mysql_fetch_array($result))
			  {
				echo "<option value='$arrvar[accountnumber]'>$arrvar[payeename]</option>";
			  }
			  ?>
		
      	            </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Payment amount</strong></td>
        	      <td><label>
        	        <input type="text" name="pay_amt" id="pay_amt" size="30" />
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Select Account number</strong></td>
        	      <td><label>
        	        <select name="ac_no" id="ac_no">
                             <option value="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; </option>
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
            
            
              <p>&nbsp;</p>
        	  <p>&nbsp;</p>
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