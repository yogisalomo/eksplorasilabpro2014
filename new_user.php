<?php

	//open file
	$user_file=fopen("username.txt","a+");
	$pass_file=fopen("pass.txt","a");
	
	//input data
	$new_u = $_POST['new_username'];
	$new_p = $_POST['new_pass'];
	
	//boolean untuk mengecek apakah username sudah terdaftar atau belum
	$user_exist = false;
	//cek apakah username yang diinput user sudah terdaftar atau belum. jika
	//belum, daftarkan pengguna. jika sudah , user harus mendaftar dengan
	//username lain.
	if(empty($_POST['new_username'])) {
		$curdir = getcwd(); 
		chdir('./resources');
		set_time_limit(9000);
		chdir($curdir); // back to where we were
		$url = 'SignUp.php';
		header( "Location: $url" );
	}
	else {
		fseek($user_file,0);
		while(!feof($user_file) && !$user_exist) {
			if($new_u == fgets($user_file)) {
				$user_exist = true;
			}
		}
		if(!$user_exist && $new_u!="" && $new_p!="") {
			echo "b";
			fwrite($user_file,"\n");
			fwrite($pass_file,"\n");
			fwrite($user_file,$new_u);
			fwrite($pass_file,$new_p);
			fclose($user_file);
			fclose($pass_file);
			$curdir = getcwd(); 
			chdir('./resources');
			set_time_limit(9000);
			chdir($curdir); // back to where we were
			$url = 'login.html';
			header( "Location: $url" );
		}
		else {
			$curdir = getcwd(); 
			chdir('./resources');
			set_time_limit(9000);
			chdir($curdir); // back to where we were
			$url = 'SignUp.php';
			header( "Location: $url" );
		}
}
	

?>