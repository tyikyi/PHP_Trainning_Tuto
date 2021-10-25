<?php

$username="admin";
$password="admin";

session_start();

if(isset($_SESSION['username'])){
	echo "<h1>Welcome " .$_SESSION['username']."</h1>";
	echo "Welocome From Page <br>";
	echo "<a href='tutorial4_logout.php'><input type='button' name='logout' value='logout'></a>";
}
else{
	if($_POST['username']==$username && $_POST['password']==$password){
		$_SESSION['username']=$username;
		echo "<script>location.href=tutorial4_page.php</script>";
	}
	else{
		echo "<script>alert('username or password incorrect!')</script>";
		echo "<script>location.href=tutorial4.php</script>";
	}
}
?>