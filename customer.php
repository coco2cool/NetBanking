<?php
include("header.php");
include("dbconnection.php");
?>
 <script language="javascript">

 function isNumberKey(evt)
      {

         var charCode = (evt.which) ? evt.which : event.keyCode
		//alert(charCode);
         if (charCode > 65 && charCode < 91 )
      	 {              
		 return true;
	 }
	 else if (charCode > 96 && charCode < 122 )
      	 {
		 return true;
	 }
	 else
	 {
        alert("should be alphabet");
	  	return false;
	 }
     }

</script>

<script type="text/javascript">
function valid()
{
	if(document.form1.brname.value=="")
	{
		alert("INVALID BRANCH NAME");
		return false;
	}
	if(document.form1.firstname.value=="")
	{
		alert("INVALID FIRST NAME");
		return false;
	}
	if(document.form1.lastname.value=="")
	{
		alert("INVALID LAST NAME");
		return false;
	}
	if(document.form1.loginid.value=="")
	{
		alert("INVALID LOGIN ID");
		return false;
	}
	if(document.form1.accountpassword.value=="")
	{
		alert("INVALID ACCOUNT PASSWORD");
		return false;
	}
	if(document.form1.confirmpassword.value=="")
	{
		alert("INVALID CONFIRM PASSWORD");
		return false;
	}
	if(document.form1.transactionpassword.value=="")
	{
		alert("INVALID TRANSACTION PASSWORD");
		return false;
	}
	if(document.form1.accstatus.value=="")
	{
		alert("INVALID ACCOUNT STATUS");
		return false;
	}
	if(document.form1.country.value=="")
	{
		alert("INVALID COUNTRY");
		return false;
	}
	if(document.form1.state.value=="")
	{
		alert("INVALID STATE");
		return false;
	}
	if(document.form1.city.value=="")
	{
		alert("INVALID CITY");
		return false;
	}
}
</script>
<?php
$m=date("Y-m-d");
if(isset($_POST["button"]))
{
$sql="INSERT INTO customers (ifsccode, firstname, lastname,loginid,accpassword,transpasword,accstatus,country,state,city,accopendate)
VALUES
('$_POST[brname]','$_POST[firstname]','$_POST[lastname]','$_POST[loginid]','$_POST[accountpassword]','$_POST[transactionpassword]','$_POST[accountstatus]','$_POST[country]','$_POST[state]','$_POST[city]','$m')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 $succres ="1 CUSTOMER RECORD ADDED SUCCESSFULLY.....";
}
$resq = mysql_query("select * from branch");
?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
  
<form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
    <p>&nbsp;<?php echo $succres; ?></p>
    <p>BRANCH NAME  
      <label for="firstname"></label>
      <label for="brname"></label>
      <select name="brname" id="brname">
        <?php
	  while($rta = mysql_fetch_array($resq) )
	  {
		  echo "<option value='$rta[ifsccode]'>$rta[branchname]</value>";
	  }
	  ?>
      </select>
    </p>
    <p>FIRST NAME  
      <label for="firstname"></label>
      <input type="text" name="firstname" onKeyPress="return isNumberKey(event)" id="firstname" />
    </p>
    <p>LAST NAME  
      <label for="lastname"></label>
      <input type="text" name="lastname" onKeyPress="return isNumberKey(event)" id="lastname" />
  </p>
<p>LOGIN ID   
  <label for="loginid"></label>
  <input type="text" name="loginid" id="loginid" />
</p>
<p>ACCOUNT PASSWORD 
  <label for="accountpassword"></label>
  <input type="password" name="accountpassword" id="accountpassword" />
</p>
  <p>CONFIRMPASSWORD
    <label for="confirmpassword"></label>
    <input type="password" name="confirmpassword" id="confirmpassword" />
  </p>
  <p>TRANSACTION PASSWORD
    <label for="transactionpassword"></label>
    <input type="password" name="transactionpassword" id="transactionpassword" />
  </p>
  <p>ACCOUNT STATUS 
    <label for="textfield"></label>
    <select name="accstatus" id="accstatus">
    <option value="">Select</option>
      <option value="active">active</option>
      <option value="inactive">inactive</option>
    </select>
</p>
  <p>COUNTRY
    <label for="textfield"></label>
    <select name="country" id="country">
    <option value="">Select</option>
      <option value="INDIA">INDIA</option>
      <option value="USA">USA</option>
    </select>
  </p>
  <p>STATE
    <label for="textfield"></label>
    <select name="state" id="state">
    <option value="">Select</option>
    <option value="KARNATAKA">KARNATAKA</option>
      <option value="KERALA">KERALA</option>
    </select>
  </p>
  <p>CITY
    <label for="city"></label>
    <input type="text" name="city" id="city" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="addcustomers"   class="submit_btn float_r"/>
  </p>
</form>
<p>&nbsp;</p>
<p>&nbsp; </p>
  </div><!-- end of content -->

  <div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>