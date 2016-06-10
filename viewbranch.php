<?php
include("header.php");
include("dbconnection.php");
$brancharray = mysql_query("select * from branch");
?>
<div id="templatemo_main"><span class="main_top"></span>
  <table width="883" border="1">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
  </table>
  <br /><br />
  <table width="883" border="1">
    <tr>
      <th colspan="6" scope="col"><a href="addbranch.php">ADD BRANCH</a></th>
    </tr>
    <tr>
      <th width="113" scope="col">IFSC CODE</th>
      <th width="133" scope="col">BRANCH CODE</th>
      <th width="87" scope="col">CITY</th>
      <th width="162" scope="col">BRANCH ADDRESS</th>
      <th width="114" scope="col">STATE</th>
      <th width="160" scope="col">COUNTRY</th>
    </tr>
      <?php	
 while($branch = mysql_fetch_array($brancharray))
	  {
echo " <tr>
      <td>&nbsp;$branch[ifsccode]</td>
      <td>&nbsp;$branch[branchname]</td>
      <td>&nbsp;$branch[city]</td>
      <td>&nbsp;$branch[branchaddress]</td>
      <td>&nbsp;$branch[state]</td>
      <td>&nbsp;$branch[country]</td>
    </tr>";
	  }
	  ?>
  </table>
<div id="templatemo_content"></div><!-- end of content -->
            
            
                	

                
            <div class="cleaner"></div>
</div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>