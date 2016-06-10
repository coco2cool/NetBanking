<?php
session_start();
include("header.php");
include("dbconnection.php");
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

if(isset($_POST["button"]))
{
mysql_query("UPDATE employees SET password='$_POST[newpass]' WHERE loginid = '$_POST[loginid]' AND password='$_POST[oldpass]'");
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
                
        	<h2>Change Login password</h2>

        	<form id="form1" name="form1" method="post" action=""onsubmit="return validateForm()">
     
        	  <table width="561" height="292" border="0">
        	    <tr>
        	      <th colspan="2" scope="row">&nbsp;
			
				    <?php 
				echo $ctrow;	
				  ?>				  
		</th>
       	        </tr>
        	    <tr>
        	      <th width="341" height="45">LOGIN ID</th>
        	      <td width="210"><input name="loginid" type="text" id="loginid" size="35" readonly="readonly" value="<?php echo $_SESSION["adminid"]; ?>"/>
                  </td>
      	      </tr>
        	    <tr>
        	      <th height="49">OLD PASSWORD</th>
        	      <td><input name="oldpass" type="password" id="oldpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th height="44" >NEW PASSWORD</th>
        	      <td><input name="newpass" type="password" id="newpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th height="43">CONFIRM PASSWORD</th>
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
            
            <h2>Admin Dashboard</h2>
                
              <ul class="templatemo_list">
                <li><a href="admindashboard.php">Home</a></li>
                <li><a href="changepasst.php">Change Password</a></li>
                </ul>
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
include("footer.php");
?>