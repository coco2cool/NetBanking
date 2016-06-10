<?php
session_start();
include("header.php");
include("dbconnection.php");
$result= mysql_query("select * from accounts where customer_id='$_SESSION[customer_id]'");
$acc= mysql_query("select * from accounts where customer_id='$_SESSION[customer_id]'");
$loan=mysql_query("select * from loan where customer_id='$_SESSION[customer_id]'");
?>
    
    
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2>Loan Accounts</h2>

        	<form id="form1" name="form1" method="post" action="">

        	  <table width="575" border="1">
                <tr>
                  <td width="35" height="42"><strong>Loan No.</strong></td>
                  <td width="57"><strong>Loan Type</strong></td>
                  <td width="58"><strong>Account Holder</strong></td>
                  <td width="58"><strong>Loan amount</strong></td>
                  <td width="61"><strong>Interest</strong></td>
                  <td width="41"><strong>Created at</strong></td>
                </tr>					
                 <?php
				  $i=1;
			  while($arrvar = mysql_fetch_array($loan))
			  {
				  $loan1=mysql_query("select * from loantype where loantypeid='$arrvar[loantypeid]'");
				$arrvar1 = mysql_fetch_array($loan1);
        	   echo " <tr>
        	      <td height='30'>$arrvar[loan_no] </td>
        	      <td>$arrvar1[loan_type]</td>
				  <td>$_SESSION[first_name] $_SESSION[last_name]</td>
				   <td>$arrvar[loan_amt]</td>
        	      <td>$arrvar[interest] %</td>
				  <td>$arrvar[createdat]</td>

      	      </tr>";
				$i++;
			  }
			  ?>
              </table>
          
       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
     <?php
	 include("custsidebar.php");
	 payloans();
	 ?> 
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
include("footer.php");
?>