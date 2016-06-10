<?php
session_start();
?>

<script>
function validateForm()
{
	var x	=	document.forms["form1"]["p_name"].value;
	var y	=	document.forms["form1"]["ac_no"].value;
	var z	=	document.forms["form1"]["code"].value;
  if (x==null || x=="")
  {
  alert("Payee name must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Account number must be filled out");
  return false;
  }
  if (z==null || z=="")
  {
  alert("Ifsc code must be filled out");
  return false;
  }
}
</script>
<?php
include("header.php");
include("dbconnection.php");
if(isset($_POST["adda3"]))
{
	$sql="INSERT INTO registered_payee
	(customer_id, payeename,accountnumber,accounttype,bankname,ifsccode)
	VALUES
	('$_SESSION[customerid]','$_POST[p_name3]','$_POST[ac_no3]','$_POST[ac_type3]','$_POST[bank_name3]','$_POST[code3]')";
	
	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	$successresult = "1 Record added";
}

if(isset($_POST["update3"]))
{ 					
	mysql_query("UPDATE registered_payee SET payee_name='$_POST[p_name3]',account_no='$_POST[ac_no3]',acc_type='$_POST[ac_type3]',bank_name='$_POST[bank_name3]',ifsc_code='$_POST[code3]' WHERE sl_no='$_POST[pid3]'");
	$updt= mysql_affected_rows();
	if($updt==1)
	{
	$successresult="Record updated successfully";
	}	

}

if(isset($_POST["delete3"]))
{
	mysql_query("DELETE FROM registered_payee WHERE sl_no='$_POST[pid3]'");
	$updt= mysql_affected_rows();
	if($updt==1)
	{
	$successresult="Record deleted successfully";
	}	
}

if(isset($_POST["btncancel"]))
{
	unset($_GET["payeeid"]);
}

$result = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customer_id]'");

if(isset($_GET[payeeid]))        	
{
$result1 = mysql_query("select * from registered_payee WHERE slno='$_GET[payeeid]'");
$arrvar1 = mysql_fetch_array($result1);
}

?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
       	  <h2>External payee</h2>
        <b></b><form id="form1" name="form1" method="post" action=""onsubmit="return validateForm()">
<?php
if(isset($_POST[adda3]) || isset($_POST[update3]))
{
	?>
        	
       	  <table width="519" height="198" border="1">
        	 
        	    <tr>
        	      <td colspan="2"><div align="center"><strong><?php echo $successresult; ?></strong></div></td>
       	        </tr>
        	    <tr>
        	      <td width="206" height="26"><strong>Payee name</strong></td>
        	      <td width="222"><label>
                 
        	        <?php echo $_POST[p_name3]; ?>
      	          </label></td>
      	      </tr>
        	    <tr>
        	      <td height="27"><strong>Bank name</strong></td>
        	      <td><label>
                  <?php
				 echo  $_POST[bank_name3];
					?>        	         
      	      
      	          </label></td>
      	      </tr>
        	    <tr>
        	      <td height="29"><strong>Account number</strong></td>
        	      <td><label>
        	        <?php echo $_POST[ac_no3]; ?>
      	          </label></td>
      	      </tr>
        	  
        	    <tr>
        	      <td height="26"><strong>Account type</strong></td>
        	      <td> <?php echo $_POST[ac_type3]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="26"><strong>IFSC code</strong></td>
        	      <td>
        	    <?php echo $_POST[code3]; ?>
      </td>
      	      </tr>
       	      </table>
<?php
}
else if(isset($_POST[delete3]))
{
?>	  <table width="519" height="89" border="1">
        	    <tr>
        	      <td width="428" height="83"><div align="center"><strong><?php echo $successresult; ?></strong></div></td>
      	      </tr>
      	    </table>
<?php
}
else
{
?>      
            
        	  <table width="519" height="344" border="1">
        	    <tr>
        	      <td colspan="2"><div align="center"><strong>Add External Payee</strong></div></td>
      	      </tr>
        	    <tr>
        	      <td width="206"><strong>Payee name</strong></td>
        	      <td width="222"><label>
        	        <input name="pid3" type="hidden" id="pid3" value="<?php echo $arrvar1[sl_no]; ?>" />
        	        <input name="p_name3" type="text" id="p_name3" size="35" value="<?php echo $arrvar1[payee_name]; ?>" />
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Bank name</strong></td>
        	      <td><label>
        
				  
				
        	        <select name="bank_name3" id="bank_name3">
        	          <option value="">Select Bank name</option>
					  <?php
					  $arr = array("Canara Bank","HDFC Bank","Axis Bank","Federal Bank");
					foreach($arr as $value)
					{
						if($arrvar1[bank_name] == $value)
						{	
						echo "<option value='$value' selected>$value</option>";	
						}
						else
						{
						echo "<option value='$value'>$value</option>";	
						}
					}
					?>
      	          </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Account number</strong></td>
        	      <td><label>
        	        <input name="ac_no3" type="text" id="ac_no3" size="35"  value="<?php echo $arrvar1[account_no]; ?>" />
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Account type</strong></td>
        	      <td>
                    <?php            
					$arr = array("SAVINGS ACCOUNT","CURRENT ACCOUNT");
					echo "<select name='ac_type3' id='ac_type3'>";
						foreach($arr as $value) 
						{
							if($arrvar1[acc_type] == $value)
							{	
							echo "<option value='$value' selected>$value</option>";
							}
							else
							{
							echo "<option value='$value'>$value</option>";	
							}
						}
					?>
      	        </select>
                </td>
      	      </tr>
        	    <tr>
        	      <td><strong>IFSC code</strong></td>
        	      <td><input name="code3" type="text" id="code3" size="35"  value="<?php echo $arrvar1[ifsc_code]; ?>"  /></td>
      	      </tr>
        	    <tr>
        	      <td height="54" colspan="2"><div align="center">
        	        <?php
if(isset($_GET[payeeid]))        	
{
?>
        	        <input type="submit" name="update3" id="update3" value="update" />
        	        <input type="submit" name="btncancel3" id="btncancel3" value="Cancel" />
        	        <input type="submit" name="delete3" id="delete3" value="Delete" />
        	        <?php
}
else
{
	?>
        	        <input type="submit" name="adda3" id="adda3" value="Add Bank Account" />
        	        <?php
}
?>
      	        </div></td>
      	      </tr>
      	    </table>
<?php
}
?>
       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            <?php
if($_GET[view]!="regpayee")
{
	?>
                <?php
				include("custsidebar.php");
				transferfunds();
				?>
<?php
}
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