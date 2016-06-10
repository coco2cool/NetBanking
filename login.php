<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_SESSION[customerid]))
{
	header("Location: accountalerts.php");
}
$result = mysql_query("SELECT * FROM customers WHERE loginid='$_POST[login]' AND accpassword='$_POST[password]'");

if(mysql_num_rows($result) == 1)
	{
		while($recarr = mysql_fetch_array($result))
		{
			
		$_SESSION[customerid] = 	$recarr[customerid];
		$_SESSION[ifsccode] = 	$recarr[ifsccode];
		$_SESSION[customername] = 	$recarr[firstname]. " ". $recarr[lastname];
		$_SESSION[loginid] = 	$recarr[loginid];
		$_SESSION[accstatus] = 	$recarr[accstatus];
		$_SESSION[accopendate] = 	$recarr[accopendate];
		$_SESSION[lastlogin] = 	$recarr[lastlogin];		
		}
		$_SESSION["loginid"] =$_POST["login"];
		header("Location: accountalerts.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}	

?>
    
    <div id="templatemo_banner">
    
    			<span class="nav_bg"></span>
            
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">
                                                  
                            <div class="cs_article">
                            
                            <div class="slider_content_wrapper">
                                
                         		 <div class="right">
                                    <h2>please note</h2>
                                    <p>You should know how to operate net transaction and if you are not familiar you may refrain from doing so. You may seek banks guidance in this regard. Bank is not responsible for online transactions going wrong</p>
                                    
                                  
                               	</div>
                                <div class="left"><img src="images/Axis-Bank-Internet-Banking.jpg" alt="" width="967" height="360" id="irc_mi" /></div>
                                </div>
                                
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '970px',
                    height : '240px',
                    speed : 400,
                    easing : 'easeOutSine'
                    });
                    });
                </script>
                <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="js/chili/recipes.js" type="text/javascript"></script>
                <div class="cleaner"></div>
   
        </div>
     <div id="templatemo_main"><span class="main_top"></span> 
     
     <p class="welcome_text">&quot;<strong>Login page:<br />
       Please enter user id and password to login</strong>&quot;</p>
     <p class="welcome_text"><br />
     <?php
	 echo $logininfo;
	 ?>
     </p>
     
     	<div class="col_w420 float_l">
     <div></div>

<div>

  <center>
  <form id="form1" name="form1" method="post" action="">
    <p>
      <strong>
      <label for="login" class="leftal">USER ID </label>
      </strong>
      <input name="login" type="text" id="login" size="40"  class="rightal"/>
    </p>
    <p>&nbsp; </p>
    <p class="cleaner_h50" id="password">
      <label for="password"  class="leftal"><strong>PASSWORD</strong></label>
      <input name="password" type="password" id="password" class="rightal" size="40" />
    </p>
    <p class="cleaner_h50">
      <input type="submit" name="btnlogin" id="btnlogin" value="Login" />
    </p>
  </form>
  </center>
</div>
<div class="button float_r"></div>
        
</div>
     	<div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_main_bottom"></div> <!-- end of main -->
    <?php
	include("footer.php");
	?>