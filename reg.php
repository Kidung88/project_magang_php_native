<?php
session_start();
include 'config.php';
if("$_POST[password]"!= "$_POST[repassword]" ){
	echo '<script language="javascript">
	alert ("Password Tidak Sama");
	window.location="register.php";
	</script>';
	exit();
}

$cek_user=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$_POST[username]'"));

if ($cek_user > 0) {
	echo '<script language="javascript">
		  alert ("Username Sudah Ada Yang Menggunakan");
		  window.location="register.php";
		  </script>';
		  exit();
}
else {
	$status = 2;
	$table ="users";
	$today = date("Y-m-d H:i:s");
	$password    =md5("$_POST[password]");	
	$mysql = "INSERT INTO $table (username, fullname, job_title, password, join_date, last_activity,status)
          VALUES('$_POST[username]', '$_POST[fullname]', '$_POST[jobtitle]', '$password','$today','$today','$status')";
	
	if(!mysql_query($mysql)) die(mysql_error());

	echo '<script language="javascript">
		  alert ("Registrasi Berhasil Di Lakukan!");
		  window.location="index.php";
		  </script>';
		  exit();
}

?>
