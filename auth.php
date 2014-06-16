<html>
<body>

<?php

//get file contents
$user = fopen("username.txt","r");
$pass = fopen("pass.txt","r");
$admin = fopen("admin.txt","r");

//boolean untuk user dan password
$user_found = false;
$pass_found = false;
$admin_found = false;

//iterator
$u = 0 ; //untuk user
$p = 0; // untuk password
$linecount = 0; //jumlah baris dalam file

//input user & pass
$input_user = $_POST['user'];
$input_pass = $_POST['pass'];

//hitung jumlah line
while(!feof($user)) {
	fgets($user);
	$linecount++;
}

//return cursor to beginning of file
fseek($user,0);

//cari apakah user terdaftar di data
while(!feof($user) && !$user_found) {
	if($input_user == fgets($user)) {
		$user_found = true; }
	else {
		$u++;
	}
}

//cari password
while(!feof($pass) && !$pass_found) {
	if($input_pass == fgets($pass)) {
		$pass_found = true;
	}
	else {
		$p++;
	}
}

//tentukan apakah benar. jika u == p dan user ditemukan di database maka benarmaka benar
if($u == $p && $user_found && $input_user!="") {
	echo "user found";
	//cari apakah admin atau bukan
	while(!feof($admin) && !$admin_found) {
		if($input_user == fgets($admin)) {
			$admin_found = true;
		}
	}
	
	if($admin_found) {
		$curdir = getcwd(); 
		chdir('./resources');
		set_time_limit(9000);
		chdir($curdir); // back to where we were
		$url = 'adminPage.html';
		header( "Location: $url" );
	}
	else {
		$curdir = getcwd(); 
		chdir('./resources');
		set_time_limit(9000);
		chdir($curdir); // back to where we were
		$url = 'userPage.html';
		header( "Location: $url" );
	}
}
else {
	$curdir = getcwd(); 
	chdir('./resources');
	set_time_limit(9000);
	chdir($curdir); // back to where we were
	$url = 'login.html';
	header( "Location: $url" );
}

fclose($user);
fclose($pass);

?>
</body>
</html>