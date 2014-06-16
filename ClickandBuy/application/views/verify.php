<?php
	mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to database server(localhost) with username and password.
	mysql_select_db("clickandbuy") or die(mysql_error()); // Select registration database.
	             
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
	{
	    // Verify data
	    $email = mysql_real_escape_string($_GET['email']); // Set email variable
	    $hash = mysql_real_escape_string($_GET['hash']); // Set hash variable
	                 
	    $search = mysql_query("SELECT email, hash, active FROM registrations WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
	    $match  = mysql_num_rows($search);
	                 
	    if($match > 0)
	    {
	        // We have a match, activate the account
	        mysql_query("UPDATE registrations SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
	        echo 'Your account has been activated, you can now login';

	        // redirect to login page
	        $page = 'http://localhost/ClickandBuy/';
			$sec = "2";
			header("Refresh: $sec; url=$page");
	    }
	    else
	    {
	        // No match -> invalid url or account has already been activated.
	        echo 'The url is either invalid or you already have activated your account.';
	    }
	                 
	}
	else
	{
	    // Invalid approach
	    echo 'Invalid approach, please use the link that has been send to your email.';
	}
?>