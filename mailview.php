<?php
session_start();
include("header.php");
include("dbconnection.php");
$dttim=date("Y-m-d h:i:s");
if(isset($_POST["sendmsg"]))
{
$sql="INSERT INTO mail(subject,message,mdatetime,senderid,reciverid)VALUES
('$_POST[subject]','$_POST[message]','$dttim','','$_POST[sendto]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$msgsuccess = mysql_affected_rows();
}

?>

<form method="post" action="">
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">

 		
             <h2>COMPOSE	MAIL</h2>
             <?php
			 if($msgsuccess == 1)
{
	echo "<h1> Message sent successfully...</h1>";
}
else
{
	?>    
     		 <p>
     		   <label for="sendto">SEND TO</label>
               <select name="sendto" id="sendto">
               </select>
             </p>
  <p>
    <label for="SUBJECT">SUBJECT</label>
    <input name="subject" type="text" id="SUBJECT" size="50" />
    </p>
             <p>
               <label for="MESSAGE">MESSAGE</label>
               <textarea name="message" id="MESSAGE" cols="45" rows="5"></textarea>
             </p>
      <p>
               <input type="submit" name="sendmsg" id="sendmsg" value="SEND MESSAGE" />
    </p>
</form>
        <?php
}
?><p>&nbsp;</p>
         <p>&nbsp;</p>
</div><!-- end of content -->
            
        <?php
			include("custsidebar.php");
			mails();
                ?>
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>