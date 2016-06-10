<?php
session_start();
include("header.php");
include("dbconnection.php");
$dttim=date("Y-m-d h:i:s");
$acc= mysql_query("select * from accounts where customer_id='$_SESSION[customer_id]'");


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
$result = mysql_query("SELECT * FROM accounts where customer_id='$_SESSION[customer_id]'");
?>
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
       	  <form method="post" action=""> 		
            <h2>Check book request</h2>
             
               <?php
			 if($msgsuccess == 1)
{
	echo "<p><h1> Message sent successfully...</h1></p>";
}
else
{
	?>
            
             <table width="497" border="1">
               <tr>
                 <td><label for="sendto">Select account number</label></td>
                 <td><select name="sendto" id="sendto">
                   <?php
                    while($rows = mysql_fetch_array($result))
  {	
  				echo "<option value='$rows[accno]'>	$rows[account_type] : $rows[accno]</option>";
  }
        ?>
                 </select>
                 <input name="subject" type="hidden" id="subject" size="50" /></td>
               </tr>
               
               <tr>
                 <td><label for="MESSAGE2">No. of Leaves</label></td>
                 <td><select name="message" id="message">
                   <option value="10">10</option>
                   <option value="20">20</option>
                   <option value="30">30</option>
                   <option value="40">40</option>
                   <option value="50">50</option>
                   <?php
                    while($rows = mysql_fetch_array($result))
  {	
  				echo "<option value='$rows[accno]'>	$rows[account_type] : $rows[accno]</option>";
  }
        ?>
                 </select></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td><input type="submit" name="sendmsg" id="sendmsg" value="SEND MESSAGE" /></td>
               </tr>
             </table>
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