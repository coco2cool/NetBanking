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
if(isNaN(document.form1.contno2.value))
	{
		alert("ENTER THE NUMERIC VALUE FOR CONTACT NUMBER");
				return false;
	}
	
	if(document.form1.contno2.value=="")
	{
		alert("INVALID CONTACT NUMBER");
		return false;
	}
	if(document.form1.empname.value=="")
	{
		alert("INVALID EMPLOYEE NAME");
		return false;
	}
	if(document.form1.lgid.value=="")
	{
		alert("INVALID LOGIN ID ");
		return false;
	}
	if(document.form1.password.value=="")
	{
		alert("INVALID PASSWORD");
		return false;
	}
	if(document.form1.cnpassword.value=="")
	{
		alert("INVALID CONFIRM PASSWORD");
		return false;
	}
	if(document.form1.emid.value=="")
	{
		alert("INVALID E-MAIL ID");
		return false;
	}
	
}
</script>
<?php
$i=date("Y-m-d");
if(isset($_POST["button2"]))
{
$sql="INSERT INTO employees (employee_name, loginid, password, emailid,contactno,createdat)
VALUES
('$_POST[empname]','$_POST[lgid]','$_POST[password]','$_POST[emid]','$_POST[contno]','$i')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  if(mysql_affected_rows() == 1)
	{
$succ = "EMPLOYEE RECORD ADDED SUCCESSFULLY...";
}
}
?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
<p>
  <?php include("topmenu.php"); ?>
</p>
<p>&nbsp;</p>
   	<p><strong><h2>ADD EMPLOYEE</h2></strong></p>
   	<p>
   <?php 
	echo $succ;
	 ?>  
   	</p>
   	<blockquote>
   	  <form onsubmit="return valid()"id="form1" name="form1" method="post" action="">
   	    <table width="407" border="0">
   	      <tr>
   	        <th scope="col"><div align="left">EMPLOYEE NAME </div></th>
   	        <th scope="col"> <label for="empname"></label>
              <div align="left">
                <input type="text" name="empname" onKeyPress="return isNumberKey(event)"id="empname" >
            </div></th>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left">LOGIN ID </div></th>
   	        <td><label for="lgid"></label>
            <input type="text" name="lgid" id="lgid" ></td>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left">PASSWORD</div></th>
   	        <td><label for="password"></label>
            <input type="password" name="password" id="password" ></td>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left">CONFIRM PASSWORD</div></th>
   	        <td><label for="cnpassword"></label>
            <input type="password" name="cnpassword" id="cnpassword" ></td>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left"> CONTACT NUMBER</div></th>
   	        <td><label for="contno2"></label>
            <input type="text" name="contno2" id="contno2"></td>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left">E-MAIL ID </div></th>
   	        <td><label for="emid"></label>
              <div align="left">
                <input type="text" name="emid" id="emid" >
            </div></td>
          </tr>
   	      <tr>
   	        <th colspan="2" scope="row"> <div align="center">
   	          <input type="submit" name="button2" id="button2" value="ADD" />
            </div></th>
          </tr>
        </table>
      </form>
 </div><!-- end of content -->

<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>