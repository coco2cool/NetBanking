       <?php
	   function myaccounts()
	   {
	   ?>
			<h2>My Accounts</h2>
                
                <ul class="templatemo_list">
                <li><strong><a href="acsummary.php">Accounts summary</a></strong></li>
                <li><strong><a href="Accounts.php">Mini statement</a></strong></li>
                <li><strong><a href="Allaccounts.php">Account details</a></strong></li>
                <li><strong><a href="statementofaccount.php">Statement of Accounts</a></strong></li>
                </ul>
              <div class="cleaner_h40"></div>
       <?php
	   }
	   
	   function transferfunds()
	   {
		   ?>
              <h2>Transfer Funds</h2>
                
                <ul class="templatemo_list">
                <li><a href="addexternalpayee.php">Add External Payee</a></li>
                <li><a href="viewexternalpayee.php">View registered Payee</a></li>
                <li><a href="Makepayment.php">Make a Payement</a></li>
                <li><a href="Transactionmade.php?pst=Complete">Payements Made</a></li>
                <li><a href="Transactionmade.php?pst=Pending">Pending Payements</a></li>
                </ul>
                
                <?php
	   }
	   
	   function payloans()
	   	 {
		   ?>
              <h2>Pay Loans</h2>
                
                <ul class="templatemo_list">
                <li><a href="viewloanac.php">View Loan Account</a></li>
                <li><a href="makeloanpayment.php">Pay loan</a></li>
                <li><a href="loanpayment.php">View Loan Payments</a></li>
                </ul>
                
                <?php
	   }
	   
	      
	   function personalise()
	   	 {
		   ?>
              <h2>Personalise</h2>
                
                <ul class="templatemo_list">
                <li><a href="changelogpass.php">Change Login Password</a></li>
                <li><a href="changetranspass.php">Change Transaction Password</a></li>
                <li><a href="custprofile.php">Customer Profile</a></li>
                </ul>
                
                <?php
	   }
	   
	   	   function mails()
	   	 {
		   ?>
	   <h2>Mails</h2>
                
                <ul class="templatemo_list">
                        <li><a href="mailinbox.php"><strong>Inbox</strong></a></li>
                <li><strong><a href="mailcompose.php">Compose</a></strong></li>
                <li><strong><a href="mailsent.php">Sent mail</a></strong><a href="mailsent.php"></a></li>
  </ul>
		<?php
		 }
	   ?>