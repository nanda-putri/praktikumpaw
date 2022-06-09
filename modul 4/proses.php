<?php 
	$user="admin";
	$pw=md5("admin");

	session_start();

	$username=$_POST["username"];
	$password=$_POST["password"];

	if ($username==$user && md5($password)==$pw) {
		$_SESSION['login']=TRUE;
		if (isset($_POST['remember'])) {
			$time=time();
			setcookie('login'.$user.$time+3600);
			header('location:table.php');
		exit();
		} else{
		header('location:login.php');
	}
		
	} 
 ?>