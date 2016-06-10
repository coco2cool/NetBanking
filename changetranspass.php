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
  alert("Old password must be filled out");
  return false;
  }
  if (z==null || z=="")
  {
  alert("New password must be filled out");
  return false;
  }
   if (a==null || a=="")
  {
  alert("Password must be confirmed");
  return false;
  }
}
</script>
<?php

include("header.php");
include("dbconnection.php");

if(isset($_POST["button"]))
{
mysql_query("UPDATE customers SET transpasword='$_POST[newpass]' WHERE emp_id = '$_SESSION[customerid]' AND transpasword='$_POST[oldpass]'");
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
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2>Change Transaction password</h2>

        	<form id="form1" name="form1" method="post" action=""onsubmit="return validateForm()">
     
        	  <table width="459" height="239" border="0">
        	    <tr>
        	      <th colspan="2" scope="row">&nbsp;
			
				    <?php 
				echo $ctrow;	
				  ?>				  
		</th>
       	        </tr>
        	    <tr>
        	      <th scope="row">LOGIN ID                </th>
        	      <td><input name="loginid" type="text" id="loginid" size="35" readonly="readonly" value="<?php echo $_SESSION["customerid"]; ?>"/></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">OLD PASSWORD</th>
        	      <td><input name="oldpass" type="password" id="oldpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">NEW PASSWORD           </th>
        	      <td><input name="newpass" type="password" id="newpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">CONFIRM PASSWORD</th>
        	      <td><input name="confpass" type="password" id="confpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
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