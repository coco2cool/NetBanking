<?php
include("header.php");
include("dbconnection.php");
$mailarray = mysql_query("select * from mail");
?>		
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
    <table width="901" border="1">
      <tr>
        <th width="105" scope="col">MAIL ID</th>
        <th width="93" scope="col">SUBJECT</th>
        <th width="101" scope="col">MESSAGE</th>
        <th width="144" scope="col">MESSAGE DATE TIME</th>
        <th width="188" scope="col">SENDER ID</th>
        <th width="132" scope="col"><p>RECEIVER ID</p></th>
      </tr>
      <?php	
 while($mail = mysql_fetch_array($mailarray))
	  {
echo "
      <tr>
        <td>&nbsp;$mail[mailid]</td>
        <td>&nbsp;$mail[subject]</td>
        <td>&nbsp;$mail[message]</td>
        <td>&nbsp;$mail[mdatetime]</td>
        <td>&nbsp;$mail[senderid]</td>
        <td>&nbsp;$mail[reciverid]</td>
        
      </tr>";
	  }
	  ?>
    </table>
</div><!-- end of content -->
            
            
                
		<div class="cleaner"></div>
  </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>