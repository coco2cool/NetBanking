<?php
session_start();
include("header.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM customers where customerid='$_GET[custid]'");
while($arrow = mysql_fetch_array($results))
{
	$custname = $arrow[firstname];
	$ifsccode=$arrow[ifsccode];
	$loginid=$arrow[loginid];
	$accstatus=$arrow[accstatus];
	$city=$arrow[city];
    $state=$arrow[state];
	$country=$arrow[country];
    $accopendate=$arrow[accopendate];
    $lastlogin=$arrow[lastlogin];
}
$resultsd = mysql_query("SELECT * FROM accounts where customerid='$_GET[custid]'");
mysql_num_rows($resultsd);
?>
<div id="templatemo_main">

  <p class="main_top">&nbsp;</p>
  <form id="form2" name="form2" method="post" action="">
    <blockquote>
      <table width="519" height="242" border="1">
        <tr>
          <th width="224" height="32" scope="col">
           
             &nbsp;CUSTOMER NAME

          </th>
          <td width="285"><?php echo $custname; ?></th>
        </tr>
        <tr>
          <td><strong>
            <label for="branch">&nbsp; BRANCH</label>
          </strong></td>
          <td>&nbsp;<?php echo $ifsccode; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="loginid">&nbsp; LOGIN ID</label>
          </strong></td>
          <td>&nbsp;<?php echo $loginid; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="accstatus">&nbsp; ACCOUNT STATUS</label>
          </strong></td>
          <td>&nbsp;<?php echo $accstatus; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="city">&nbsp; CITY</label>
          </strong></td>
          <td>&nbsp;<?php echo $city; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="state">&nbsp; STATE</label>
          </strong></td>
          <td>&nbsp;<?php echo $state; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="country">&nbsp; COUNTRY</label>
          </strong></td>
          <td>&nbsp;<?php echo $country; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="accopendate">&nbsp; ACCOUNT OPEN DATE</label>
          </strong></td>
          <td>&nbsp;<?php echo $accopendate; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="lastlogin">&nbsp; LAST LOGIN</label>
          </strong></td>
          <td>&nbsp;<?php echo $lastlogin; ?></td>
        </tr>
      </table>

    </blockquote>
    <table width="777" border="1">
      <tr>
        <th colspan="8" scope="col"><a href="account.php">ADD CUSTOMER ACCOUNT</a></th>
      </tr>
      <tr>
        <th colspan="8" scope="col"><strong>CUSTOMER ACCOUNTS</strong></th>
        </tr>
      <tr>
        <th width="91" scope="col"><strong>ACCOUNT NO</strong></th>
        <th width="67" scope="col"><strong>STATUS</strong></th>
        <th width="100" scope="col"><strong>PRIMARY ACCOUNT</strong></th>
        <th width="80" scope="col"><strong>OPEN DATE</strong></th>
        <th width="81" scope="col"><strong>ACCOUNT TYPE</strong></th>
        <th width="76" scope="col"><strong>BALANCE</strong></th>
        <th width="113" scope="col"><strong>UNCLEAR BALANCE</strong></th>
        <th width="117" scope="col"><strong>ACCURED INTEREST</strong></th>
      </tr>
      <?php
	 while($arrow=mysql_fetch_array($resultsd))
	 {
	 ?>
        <tr>
        <td>&nbsp;<?php echo $arrow[accno];?></td>
        <td>&nbsp;<?php echo $arrow[accstatus];?></td>
        <td>&nbsp;<?php echo $arrow[primaryacc];?></td>
        <td>&nbsp;<?php echo $arrow[accopendate];?></td>
        <td>&nbsp;<?php echo $arrow[accounttype];?></td>
        <td>&nbsp;<?php echo $arrow[accountbalance];?></td>
        <td>&nbsp;<?php echo $arrow[unclearbalance];?></td>
        <td>&nbsp;<?php echo $arrow[accuredinterest]; ?></td>
      </tr>
     <?php
     }
	 ?>
</table>
    <p>&nbsp;</p>
  </form>

  <div id="templatemo_content"></div>
  <strong><!-- end of content -->
            
    </strong>
  <div class="cleaner"></div>
  </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>