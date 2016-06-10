<?php
include("header.php");
include("dbconnection.php");
$emparray = mysql_query("select * from employees");
?>	
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
  
   <table width="883" border="1">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
  </table>
    <table width="901" border="1">
    	<tr>
      <th colspan="6" scope="col"><a href="addemployee.php">ADD EMPLOYEE</a></th>
    </tr>
      <tr>
        <th width="105" scope="col">EMPLOYEE ID</th>
        <th width="93" scope="col">EMP NAME</th>
        <th width="101" scope="col">LOGIN ID</th>
        <th width="144" scope="col">EMAIL ID</th>
        <th width="188" scope="col">CONTACT NO</th>
        <th width="132" scope="col">CREATE DATE</th>
        <th width="332" scope="col">LAST LOGIN</th>
      </tr>
      <?php	
 while($employee = mysql_fetch_array($emparray))
	  {
echo "
      <tr>
        <td>&nbsp;$employee[empid]</td>
        <td>&nbsp;$employee[employee_name]</td>
        <td>&nbsp;$employee[loginid]</td>
        <td>&nbsp;$employee[emailid]</td>
        <td>&nbsp;$employee[contactno]</td>
        <td>&nbsp;$employee[createdat]</td>
        <td>&nbsp;$employee[last_login]</td>
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