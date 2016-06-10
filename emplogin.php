<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_SESSION["employeeid"]))
{
	header("Location: employeeaccount.php");
}
if(isset($_SESSION["adminid"]))
{
	header("Location: admindashboard.php");
}

if(isset($_POST["loginadmin"]))
{
		//coding for login the employee account
	$result = mysql_query("SELECT * FROM employees
	WHERE loginid='$_POST[adminlogin]' AND password='$_POST[adminpass]'");


	if(mysql_num_rows($result) == 1)
	{
		$_SESSION["adminid"] =$_POST["adminlogin"];
		header("Location: admindashboard.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}
}

if(isset($_POST["loginemp"]))
{
		//coding for login the employee account
	$result = mysql_query("SELECT * FROM employees
	WHERE loginid='$_POST[emplogin]' AND password='$_POST[emppassword]'");


	if(mysql_num_rows($result) == 1)
	{
		$_SESSION["employeeid"] =$_POST["emplogin"];
		header("Location: employeeaccount.php");
	}
	else
	{
		$logininfo1 = "Invalid Username or password entered";
	}
}
?>
<div id="templatemo_main">
<p class="welcome_text">&quot;<strong>Administrator and Employee Login page.</strong>&quot;</p>
     
     	<div class="col_w420 float_l">
     <div></div>
          <h2>Administrator Login page</h2>
          <div>
            <form id="form2" name="form1" method="post" action="">
              <p>
                <label for="adminlogin" class="leftal"><strong>Loginid</strong></label>
                <input name="adminlogin" type="text" id="adminlogin" size="40"  class="rightal"/>
              </p>
              <p class="cleaner_h50" id="password2">
                <label for="adminpass"  class="leftal"><strong>password</strong></label>
                <input name="adminpass" type="password" id="adminpass" class="rightal" size="40" />
              </p>
              <p class="cleaner_h50">&nbsp;<font color="#FF0000"><b><?php echo $logininfo; ?></b></font></p>
              <p class="cleaner_h50">
                <input  name="loginadmin" type="submit"   class="submit_btn float_r" id="loginadmin" value="Click here to Login"  />
              </p>
            </form>
          </div>
<h2>Employee Login page</h2>
<div>
  <form id="form1" name="form1" method="post" action="">
    <p>
      <label for="emplogin" class="leftal"><strong>Loginid</strong></label>
      <input name="emplogin" type="text" id="emplogin" size="40"  class="rightal"/>
    </p>
    <p class="cleaner_h50" id="password">
      <label for="emppassword"  class="leftal"><strong>password</strong></label>
      <input name="emppassword" type="password" id="emppassword" class="rightal" size="40" />
  </p>
    <p class="cleaner_h50">&nbsp;<font color="#FF0000"><b><?php echo $logininfo1; ?></b></font></p>
    <p class="cleaner_h50">
     <input  name="loginemp" type="submit"   class="submit_btn float_r" id="loginemp" value="Click here to Login"  />
    </p>
  </form>
</div>
<div class="button float_r"></div>
        
</div>
     	<div class="cleaner"></div>
    </div> <!-- end of main -->
<div id="templatemo_main_bottom"></div> <!-- end of main -->
    <?php
	include("footer.php");
	?>