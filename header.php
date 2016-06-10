<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>netbanking</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<body>

<div id="templatemo_wrapper">

    <div id="templatemo_header">
        <div id="site_title">
        
            <h1><a href="index.php"><img src="images/banking.png" alt="logo" width="222" height="31" /><span>bank of India</span></a></h1>
            
        </div> <!-- end of site_title -->
    </div> <!-- end of header -->
    
  <div id="templatemo_menu">
    <?php
	if(isset($_SESSION["adminid"]))
	{
	?>
        <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="viewbranch.php">Settings</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
            <li><a href="viewtransaction.php">Transactions</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul> 
        <?php
		}
		else if (isset($_SESSION["employeeid"]))
		{
			?>
            <ul>
            <li><a href="employeeaccount.php">My accounts</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
             <li><a href="payloans.php">Loan account</a></li>
            <li><a href="viewtransaction.php">View transaction</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul> 
            <?php
		}
		else if (isset($_SESSION["customerid"]))
		{
		?>
        <ul>
            <li><a href="index.php">My accounts</a></li>
            <li><a href="transferfunds.php">Transfer funds</a></li>
            <li><a href="payloans.php">Pay loans</a></li>
            <li><a href="mailinbox.php">Mails</a></li>
            <li><a href="changetranspass.php">Personalise</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
        <?php
		}
		else
		{
		?>
             <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
        <?php
		}
		?>
    </div> <!-- end of templatemo_menu -->