<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_SESSION[customerid]))
{
	header("Location: accountalerts.php");
}
$result = mysql_query("SELECT * FROM customers
	WHERE loginid='$_POST[login]' AND accpassword='$_POST[password]'");
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
     
     <p class="welcome_text">&quot;<strong>The bank never asks for updating user-id/password through Email/SMS.<br />
       Never Click at links provided in Emails to reach our website/login page.</strong>&quot;</p>
     
     	<div class="col_w420 float_l">
     <div></div>
          <h2><a href="login.php"><img src="images/login.jpg" width="405" height="250" /></a></h2>
          <p>&nbsp;</p>
<div></div>
<div class="button float_r"></div>
        
</div>
               <div class="col_w420 float_r">
                  <h2>PLEASE NOTE</h2>
                 You should know how to operate net transaction and if you are not familiar you may refrain from doing so. You may seek banks guidance in this regard. Bank is not responsible for online transactions going wrong.
                 <p>&nbsp;</p>
                    
                 <div class="button float_r"></div>
                     
                   <div class="cleaner_h30"></div>
                   <h2>DISCLAIMER</h2>
                      <blockquote>
                          <p>We shall also not be responsible for wrong transactions and wanton disclosure of details by you. Viewing option and transaction option on the net are different.You may exercise your option diligently.</p>
                      </blockquote>
              </div>
                
              <div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_main_bottom"></div> <!-- end of main -->
    <?php
	include("footer.php");
	?>