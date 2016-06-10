<?php
include("header.php");
include("dbconnection.php");
$custarray = mysql_query("select * from customers");
?>
<div id="templatemo_main">
  <p><a href="customer.php"><strong>Add Customer</strong></a></p>
  <table width="913" height="38" border="1">
    <tr>
      <th width="100" scope="col">CUSTOMER ID</th>
      <th width="89" scope="col">LOGIN ID</th>
      <th width="102" scope="col">NAME</th>
      <th width="108" scope="col">ACCOUNT <br />
      STATUS</th>
      <th width="108" scope="col">LOCATION</th>
      <th width="159" scope="col">ACCOPEN DATE</th>
      <th width="125" scope="col">LAST LOGIN</th>
      <th width="70" scope="col">MORE</th>
    </tr>
    <?php	
 while($customer = mysql_fetch_array($custarray))
	  {
echo " <tr>
      <td>&nbsp;$customer[customerid]</td>
      <td>&nbsp;$customer[loginid]</td>
      <td>$customer[firstname]&nbsp;$customer[lastname]</td>
        <td>&nbsp;$customer[accstatus]</td>
      <td>&nbsp;$customer[city]<br> $customer[state]<br> $customer[country]</td>
     <td>&nbsp;$customer[accopendate]</td>
      <td>&nbsp;$customer[lastlogin]</td>
	  <td>&nbsp;<a href='customerinf.php?custid=$customer[customerid]'>MORE</a>&nbsp;</td>
    </tr>";
	  }
	 ?>
  </table>
  <span class="main_top"></span>
  <div id="templatemo_content"></div><!-- end of content -->

  <div class="cleaner"></div>
</div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>