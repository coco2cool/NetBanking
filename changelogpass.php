<?php
session_start();
include("header.php");
include("dbconnection.php");

if(isset($_POST["button"]))
{
mysql_query("UPDATE customers SET accpassword='$_POST[newpass]' WHERE customerid='$_SESSION[customerid]' AND accpassword='$_POST[oldpass]'");
	if(mysql_affected_rows() == 1)
	{
	$ctrow = "Password updated successfully..";
	}
	else
	{
	$ctrow = "Failed to update Password";
	}
}

?>
<script type="text/javascript">
function valid()
{
	if(document.form1.loginid.value=="")
	{
		alert("INVALID LOGIN ID");
		return false;
	}
   if(document.form1.oldpassword.value=="")
	{
		alert("INVALID OLD PASSWORD");
		return false;
	}
	if(document.form1.newpassword.value=="")
	{
		alert("INVALID NEW PASSWORD");
		return false;
	}
	if(document.form1.confpassword.value=="")
	{
		alert("INVALID CONFIRM PASSWORD");
		return false;
	}
}
</script>
<?php
//coding to change password
session_start();
?>
<script>
function validateForm()
{
var x=document.forms["form1"]["loginid"].value;
var y=document.forms["form1"]["oldpass"].value;
var z=document.forms["form1"]["newpass"].value;
var a=document.forms["form1"]["confpass"].value;
if (x==null || x=="")
  {
  alert("Login id must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Old password must be entered");
  return false;
  }
  if (z==null || z=="")
  {
  alert("Enter the new password");
  return false;
  }
  if (a==null || a=="")
  {
  alert("Password must be confirmed");
  return false;
  }
}
</script>

    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2>Change Login password</h2>

        	<form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
     
        	  <table width="606" height="314" border="0">
        	    <tr>
        	      <th colspan="2" scope="row">&nbsp;
			
				    <?php 
				echo $ctrow;	
				  ?>				  
		</th>
       	        </tr>
        	    <tr>
        	      <th width="289" height="46" scope="row">LOGIN ID</th>
        	      <td width="210"><input name="loginid" type="text" id="loginid" size="35" readonly="readonly" value="<?php echo $_SESSION[customerid]; ?>"/></td>
      	      </tr>
        	    <tr>
        	      <th height="42" scope="row">OLD PASSWORD</th>
        	      <td><input name="oldpass" type="password" id="oldpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th height="47" scope="row">
        	        NEW PASSWORD
        	      </label>                  </th>
        	      <td><input name="newpass" type="password" id="newpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th height="46" scope="row">
CONFIRM PASSWORD
        	</th>
        	      <td><input name="confpass" type="password" id="confpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <th height="60" scope="row">&nbsp;</th>
        	      <td><input type="submit" name="button" id="button" value="UPDATE PASSWORD" /></td>
      	      </tr>
      	    </table>
        	  <p>&nbsp;</p>
          </form>
        	<p>&nbsp;</p>
       	  <div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            <?php
			include("custsidebar.php");
            personalise();
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