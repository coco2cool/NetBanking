<?php
session_start();
include("header.php");
if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
?>
    <div id="templatemo_main"><span class="main_top"></span> 
     	
<div id="templatemo_content">
     		<div class="news_box">
                    <h2><B>Administrator Dashboard</B></h2>		
                    <div class="news_info"></div>
<p><b>This is administrator main page. Here administrator can control all customer information, employee records, bank account details, etc.</b></p>
                    <div class="cleaner"></div>
     		</div>
</div><!-- end of content -->
            
            <div id="templatemo_sidebar">
                    <h2>Admin Dashboard</h2>
                
                <ul class="templatemo_list">
                <li><a href="admindashboard.php">Home</a></li>
                <li><a href="changepasst.php">Change Password</a></li>
                </ul>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>