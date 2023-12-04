<?php
	session_start();
	if(!isset($_POST['submit'])){
		echo "Something wrong! Check again!";
		exit;
	}
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$name = trim($_POST['name']);
	$pass = trim($_POST['pass']);

	if($name == "" || $pass == ""){
		echo "Tên và mật khẩu không được để trống!";
		exit;
	}

	$name = mysqli_real_escape_string($conn, $name);
	$pass = mysqli_real_escape_string($conn, $pass);
	//  $pass = sha1($pass);

	// get from db
	$query = "SELECT * from user";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);

	if($name != $row['name'] || $pass != $row['pass']){
		
		echo "Tên hoac mat khâu  sai. Kiểm tra lại!";
		$_SESSION['user'] = false;
		exit;
	}
	

	if(isset($conn)) {mysqli_close($conn);}
	$_SESSION['user'] = true;
	header("Location: admin_product2.php");
	// admin_product.php
?>