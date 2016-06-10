<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_POST["sendmsg"]))
{
$sql="INSERT INTO  mail(subject,message,mdatetime,senderid,reciverid)VALUES
('$_POST[subject]','$_POST[message]','$dttim','$_SESSION[adminid]','$_POST[sendto]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$msgsuccess = mysql_affected_rows();
}
$result = mysql_query("SELECT * FROM customers");
?>

    
     <form method="post" action="">
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">

 		
             <h2 align="center" ><strong><u><kbd>COMPOSE MAIL</kbd></u></strong></h2>
             <?php
			 if($msgsuccess == 1)
{
	echo "<h1> Message sent successfully...</h1>";
}
else
{
	?>    
     		 <p>
     		   <label for="sendto"><strong>SEND TO</strong></label>

               <select name="sendto" id="sendto">
   <?php
                    while($rows = mysql_fetch_array($result))
  {	
  				echo "<option value='$rows[customerid]'>$rows[loginid] : $rows[firstname]	$rows[lastname]</option>";
  }
        ?>
               </select>
             </p>
  <p>
    <label for="SUBJECT"><strong>SUBJECT</strong></label>
    <input name="subject" type="text" id="subject" size="50" />
    </p>
             <p>
               <label for="MESSAGE"><strong>MESSAGE</strong></label>
               <textarea name="message" id="MESSAGE" cols="45" rows="5"></textarea>
             </p>
      <p>
               <input type="submit" name="sendmsg" id="sendmsg" value="SEND MESSAGE" />
    </p>
</form>
        <?php
}
?>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
                          <?php
			include("custsidebar.php");
			mails();
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