<?php defined('SYSPATH') or die('No direct script access.');

class Model_User {
	
	public static $user_table = 'user';
	public static $wishlist_table = 'wishlist';
	// retrive the username
	public static function sign_in($username, $password) {
		foreach (DB::select()
			->from(Model_User::$user_table)
			->where('username', '=', $username)
			->where('password', '=', $password)
			->where('active', '=', 1)
			->execute()
			->as_array() as $login) {
			return $login['username'];
		}
		return null;
	}
	// change the password
	public static function update_password($username, $password) {
		DB::update(Model_User::$user_table)
			->set(array('password' => $password))
			->where('username', '=', $username)
			->execute();
	}

	// change the password
	public static function get_level($username, $level) {
		return DB::select('level '.$level)
			->from(Model_User::$user_table)
			->where('username', '=', $username)
			->execute()
			->as_array();
	}

	// change the password
	public static function update_level($username, $level, $count) {
		DB::update(Model_User::$user_table)
			->set(array('level '.$level => $count))
			->where('username', '=', $username)
			->execute();
	}
	// change the first name
	public static function update_first_name($username, $first_name) {
		DB::update(Model_User::$user_table)
			->set(array('first_name' => $first_name))
			->where('username', '=', $username)
			->execute();
	}
	// change the surname
	public static function update_surname($username, $surname) {
		DB::update(Model_User::$user_table)
			->set(array('surname' => $surname))
			->where('username', '=', $username)
			->execute();
	}
	// change the address
	public static function update_address($username, $address) {
		DB::update(Model_User::$user_table)
			->set(array('password' => $password))
			->where('address', '=', $address)
			->execute();
	}
	// inserting data to user table
	public static function sign_up($form) {
		return DB::insert(Model_User::$user_table, array('username', 'password', 'level 3', 'first_name', 'surname', 'address', 'active', 'email'))
			->values(array($form['username'], $form['password'], 3, $form['first_name'], $form['surname'], $form['address'], 0, $form['email']))
			->execute();
	}
	// check whether the username is available
	public static function is_available($username) {
		if (DB::select()
			->from(Model_User::$user_table)
			->where('username', '=', $username)
			->execute()
			->as_array() != NULL) {
			return true;
		}
		else
			return false;
	}
	// get the data from username
	public static function get_data($username) {
		foreach (DB::select()
			->from(Model_User::$user_table)
			->where('username', '=', $username)
			->execute()
			->as_array() as $login) {
			return $login;
		}
	}
	// add to wishlist table
	public static function add_wish_list($username, $category, $item, $price) {
		return DB::insert(Model_User::$wishlist_table, array('username', 'category', 'item', 'price'))
			->values(array($username, $category, $item, $price))
			->execute();
	}
	// get all wishlist from every user
	public static function get_all_wishlist() {
		return DB::select()
			->from('wishlist')
			->execute()
			->as_array();
	}
	// get all wishlist from every user
	public static function get_all_wishlist_category() {
		return DB::select('category')
			->distinct(TRUE)
			->from('wishlist')
			->execute()
			->as_array();
	}
	// get the user wishlist from the specific username 
	public static function get_wishlist_by_username($username) {
		return DB::select()
			->from('wishlist')
			->where('username', '=', $username)
			->execute()
			->as_array();
	}
	// get the user wishlist from the specific username 
	public static function get_wishlist_by_category($category) {
		return DB::select()
			->from('wishlist')
			->where('category', '=', $category)
			->execute()
			->as_array();
	}
	// add to message table
	public static function add_message($sender, $recipient, $context) {
		return DB::insert('message', array('sender', 'recipient', 'timestamp', 'context'))
			->values(array($sender, $recipient, time(), $context))
			->execute();
	}
	// get username message from table
	public static function get_message($username) {
		return DB::query(Database::SELECT, '
				(SELECT * FROM `message` 
				WHERE `sender` = \''.$username.'\') 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `recipient` = \''.$username.'\')
				ORDER BY `timestamp`; 
			')->execute()
			->as_array();
	}
	// get username1 and username2 message from table
	public static function get_message2($username1, $username2) {
		return DB::query(Database::SELECT, '
				(SELECT * FROM `message` 
				WHERE `sender` = \''.$username1.'\' AND `recipient` = \''.$username2.'\') 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `sender` = \''.$username2.'\' AND `recipient` = \''.$username1.'\')
				ORDER BY `timestamp`; 
			')->execute()
			->as_array();
	}
	// YANG DITAMBAH ANDA
	public static function verification_step($email,$username,$password) {
		$hash = md5( rand(0,1000) ); 
		DB::query(Database::INSERT, "
			INSERT INTO registrations (username, password, email, hash) VALUES(
			'".$username."', 
			'".$password."', 
			'".$email."', 
			'".$hash."') "
		)->execute();

		require('C:\xampp\htdocs\PHPMailer\class.phpmailer.php');
		$from = "tomoaquino@gmail.com";
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->IsHTML(true);
		$mail->SMTPDebug = 1;
		$mail->SMTPAuth   = true;                  	// enable SMTP authentication
		$mail->Host       = "smtp.gmail.com"; 		// SMTP host
		$mail->SMTPSecure = 'ssl';					// don't forget to enable 'extension=php_openssl.dll' and 'SMTP localhost' in php.ini
		$mail->Port       =  465;                   // set the SMTP port (gmail port)
		
		$mail->Username   = "tomoaquino@gmail.com"; // SMTP  username
		$mail->Password   = "326159487"; 		 	// SMTP password
		$mail->SetFrom($from, "From ClickandBuy");
		$mail->Subject    = "ClickandBuy Email Verification";
		$body = '
			 <br> Thanks for signing up!<br>
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
			 <br>
			------------------------<br>
			Username: '.$username.' <br>
			Password: '.$password.' <br>
			------------------------<br>
			 <br>
			Please click this link to activate your account:<br>
			http://localhost/ClickandBuy/verify?email='.$email.'&hash='.$hash.'
		'; // Our message above including the link
		$mail->MsgHTML($body);
		$address = $to = $email;
		$mail->AddAddress($email);

		if(!$mail->Send()) {
			return false;
		} 
		else {
			return true;
		}
	}
}
