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
if(isset($_POST["adda"]))
{
$sql="INSERT INTO registered_payee
(customer_id, payee_name,account_no,acc_type,	bank_name,ifsc_code)
VALUES
('$_SESSION[customerid]','$_POST[p_name]','$_POST[ac_no]','$_POST[ac_type]','$_POST[bank_name]','$_POST[code]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$successresult = "1 Record added";
}
if(isset($_POST["update"]))
{
	mysql_query("UPDATE registered_payee SET sl_no='$_POST[slno]',payee_name='$_POST[p_name]',account_no='$_POST[ac_no]',acc_type='$_POST[ac_type]',	bank_name='$_POST[bank_name]',	ifsc_code='$_POST[code]' WHERE sl_no='$_POST[pid]'");
	$updt= mysql_affected_rows();
	if($updt==1)
	{
	$successresult="Record updated successfully";
	}	
	unset($_GET["payeeid"]);
}

if(isset($_POST["delete"]))
{
	mysql_query("DELETE FROM registered_payee WHERE sl_no='$_POST[pid]'");
	$updt= mysql_affected_rows();
	if($udelid==1)
	{
	$successresult="Record deleted successfully";
	}	
}

if(isset($_POST["btncancel"]))
{
	unset($_GET["payeeid"]);
}

$result = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customerid]'");

if(isset($_GET[payeeid]))        	
{
$result1 = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customerid]'");
$arrvar1 = mysql_fetch_array($result1);
}

?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
       	  <h2>External payee</h2>
        	<form id="form1" name="form1" method="post" action="" onsubmit="return validateForm()">
        	  <table width="895" height="54" border="1">
        	    <tr bgcolor="#00FFFF">
        	      <td height="23" align="center"><strong><a href="transferfunds.php">&lt;&lt; Back</a></strong></td>
        	      <td height="23" colspan="5" align="center"><strong>Inter Bank Payee List</strong></td>
       	        </tr>
        	    <tr bgcolor="#00FFFF">
        	      <td width="106" height="23"><strong>Payee name</strong></td>
        	      <td width="94"><strong>Bank name</strong></td>
        	      <td width="139"><strong>Account number</strong></td>
        	      <td width="139"><strong>Account type</strong></td>
        	      <td width="156"><strong>IFSC code</strong></td>
               
        	      <td width="117"><strong>Update</strong></td>
             
      	      </tr>
        	    <?php

			
			  while($arrvar = mysql_fetch_array($result))
			  {
        	   echo "<tr><td>$arrvar[payeename]</td><td> $arrvar[bankname] </td>
        	      <td> $arrvar[accountnumber]</td>
				   <td> $arrvar[accounttype]</td>
				     <td> $arrvar[ifsccode]</td>
        	      <td><a href='addexternalpayee.php?payeeid=$arrvar[slno]'>Update</a></td>
      	      </tr>";
			  }
			
			  ?>
              <td height="33" colspan="7" align="center"><strong>To delete a Payee, click on update which will divert you to a new page from where you can delete it.</strong></td>
      	    </table>

       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
      
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
include("footer.php");
?>