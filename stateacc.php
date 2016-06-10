<?php
include("header.php");
?>
<div id="templatemo_main">
  <div id="templatemo_content">
    <p align="center"><strong>STATEMENTS OF ACCOUNT</strong></p>
    <table width="449" border="2">
      <tr>
        <th width="207" scope="row"><strong>Select an account number</strong></th>
      </tr>
      <tr>
        <th scope="row"><strong>Account number
            <select name="select" id="select">
            </select>
          <input type="submit" name="display" id="display" value="DISPLAY" />
        </strong></th>
      </tr>
    </table>
    <p>&nbsp;</p>
<table width="496" border="1">
  <tr>
        <th width="260" scope="row"><strong>Last
           <input type="text" name="textfield2" id="textfield" />
        </strong></th>
        <td width="220"><strong>Transaction
          <input type="submit" name="button2" id="button2" value="DISPLAY" />
        </strong></td>
      </tr>
  </table>
    <p>&nbsp;</p>
    <table width="432" border="2"  textcolor="black">
      <tr>
        <th rowspan="2" scope="row"><strong>Transaction date range</strong></th>
        <td><strong>From
          <input type="text" name="textfield" id="textfield2" />
        </strong></td>
      </tr>
      <tr>
        <td><strong>To
          <input type="text" name="textfield3" id="textfield3" />
        </strong></td>
      </tr>
      <tr>
        <th scope="row"><strong>Transaction Type</strong></th>
        <td><strong>
          <select name="select3" id="select3">
            <option value="credit">credit</option>
            <option value="debit">debit</option>
          </select>
        </strong></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><p>
          <strong>
          <input type="submit" name="button" id="button" value="DISPLAY" />
          </strong></p></th>
        </tr>
</table>
    <p>&nbsp;</p>
    <table width="667" border="1">
      <tr>
        <th colspan="7" scope="row">&nbsp;</th>
        </tr>
      <tr>
        <th width="45" scope="row"><strong>Date</strong></th>
        <td width="120"><strong>Transaction ID</strong></td>
        <td width="82"><strong>Particulars</strong></td>
        <td width="81"><strong>TransType</strong></td>
        <td width="96"><strong>Withdrawals</strong></td>
        <td width="81"><strong>Deposits</strong></td>
        <td width="116"><strong>Balance Amount</strong></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
       <?php
	   include("myaccountssidebar.php");
	   ?>
                

                
                <div class="cleaner_h40"></div>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>