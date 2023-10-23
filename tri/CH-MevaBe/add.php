<?php

	session_start();
	require_once "./functions/admins.php";
	$title = "Add new product";
	//require "./template/header.php";
	require "./functions/database_functions.php";
	$conn = db_connect();


	if (isset($_POST['sbm'])){
		//$id = $_POST['id'];
		$tênsp = $_POST['tênsp'];
		$hìnhảnh = $_FILES['hìnhảnh']['name'];
		$hìnhảnh_tmp = $_FILES['hìnhảnh']['tmp_name'];
		$thôngtinsp = $_POST['thôngtinsp'];
		$giá = (float)($_POST['giá']);
		$nhàsảnxuất = $_POST['nhàsảnxuất'];
		
			$sql = 'INSERT INTO products(tênsp, hìnhảnh, thôngtinsp, giá, nhàsảnxuất)
					VALUES($tênsp,$hìnhảnh,$thôngtinsp,$giá,$nhàsảnxuất)';
					$query = mysqli_query($conn,$sql);
					move_uploaded_file($hìnhảnh_tmp,'img/'.$hìnhảnh);
					// $stmt = $conn->prepare($sql);
					// $stmt->bind_param(":id", $id);
					// $stmt->bindParam(":tênsp", $tênsp);
					// $stmt->bindParam(":hìnhảnh", $hìnhảnh);
					// $stmt->bindParam(":thôngtinsp", $thôngtinsp);
					// $stmt->bindParam(":giá", $giá);
					// $stmt->bindParam(":nhàsảnxuất", $nhàsảnxuất);
					// $stmt->execute();
					// if($stmt->rowCount()){
					// 	exit();
					// }
					// exit();			
		
		
	}

?>