<?php
include("header.php");
include("dbconnection.php");
$loanarray = mysql_query("select * from loan");
?>			`	`
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
    <table width="901" border="1">
      <tr>
        <th width="105" scope="col">LOAN ID</th>
        <th width="93" scope="col">LOAN TYPE</th>
        <th width="101" scope="col">LOANAMT</th>
        <th width="144" scope="col">PERIOD</th>
        <th width="188" scope="col">INTEREST</th>
        <th width="132" scope="col"><p>STARTDATE</p></th>
      </tr>
      <?php	
 while($loan = mysql_fetch_array($loanarray))
	  {
echo "
      <tr>
        <td>&nbsp;$loan[loanid]</td>
        <td>&nbsp;$loan[loantype]</td>
        <td>&nbsp;$loan[loanamt]</td>
        <td>&nbsp;$loan[period]</td>
        <td>&nbsp;$loan[interest]</td>
        <td>&nbsp;$loan[startdate]</td>
        
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