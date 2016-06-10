<?php
include("header.php");
include("dbconnection.php");
?>
<script type="text/javascript">
function valid()
{ 

if(parseInt(document.form1.acc.value) <= 0 )
	{
		alert("numbers must be greater than 0");
		return false;
	}
	
	if(isNaN(document.form1.acc.value))
	{
		alert("enter the numeric value for account number");
				return false;
	}
	
	if(document.form1.acc.value=="")
	{
		alert("INVALID ACCOUNT NUMBER");
		return false;
	}
	if(document.form1.accstatus.value=="")
	{
		alert("PLEASE SELECT ACCOUNT STATUS ");
		return false;
	}
	if(document.form1.accopendate.value=="")
	{
		alert("INVALID ACCOUNT OPENDATE");
		return false;
	}
	if(document.form1.balance.value=="")
	{
		alert("INVALID BALANCE");
		return false;
	}
	if(document.form1.unclearbalance.value=="")
	{
		alert("INVALID UNCLEAR BALANCE");
		return false;
	}
	if(document.form1.accuredinterest.value=="")
	{
		alert("INVALID ACCURED INTEREST");
		return false;
	}
	
}
</script>
<?php
$m=date("Y-m-d");
if(isset($_POST["button"]))
{
$sql="INSERT INTO accounts(	accno,accstatus,primaryacc,accopendate,accounttype,accountbalance,unclearbalance,accuredinterest)
VALUES
('$_POST[acc]','$_POST[accstatus]','$_POST[primaryacc]','$_POST[accopendate]','$_POST[acctype]','$_POST[balance]','$_POST[unclearbalance]','$_POST[accuredinterest]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
	if(mysql_affected_rows() == 1)
	{
	$accres =  "1 NEW ACCOUNT ADDED SUCCESSFULLY ........";
	}
}
?>
<form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
  <p><?php
  echo $accres;
  ?>  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="583" border="0">
    <tr>
      <th scope="row">ACCOUNT NUMBER</th>
      <td><input type="text" name="acc" id="acc" /></td>
    </tr>
    <tr>
      <th width="303" scope="row">ACCOUNT STATUS</th>
      <td width="268"><select name="accstatus" id="accstatus">
        <option value="">Select</option>
        <option value="active">active</option>
        <option value="inactive">inactive</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row">PRIMARY ACCOUNT</th>
      <td><select name="primaryacc" id="primaryacc">
        <option value="YES">YES</option>
        <option value="NO">NO</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row">ACCOUNT OPENDATE
        <label for="accopendate3"></label>
        (YYYY-MM-DD)</th>
      <td><input type="text" name="accopendate" id="accopendate" /></td>
    </tr>
    <tr>
      <th scope="row">ACCOUNT TYPE</th>
      <td><select name="acctype" id="acctype">
        <option value="SAVING">SAVING</option>
        <option value="CURRENT">CURRENT</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row">BALANCE</th>
      <td><input type="text" name="balance" id="balance" /></td>
    </tr>
    <tr>
      <th scope="row">UNCLEAR BALANCE</th>
      <td><input type="text" name="unclearbalance" id="unclearbalance" /></td>
    </tr>
    <tr>
      <th scope="row">ACCUREDINTEREST</th>
      <td><input type="text" name="accuredinterest" id="accuredinterest" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="SUBMIT" /></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
    <p>&nbsp;</p>
<p>&nbsp; </p>
<p>&nbsp; </p>
</div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
       <?php
	   include("myaccountssidebar.php");
	   ?>
                

                
                <div class="cleaner_h40"></div>
                <blockquote>&nbsp;</blockquote>
            
            </div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>