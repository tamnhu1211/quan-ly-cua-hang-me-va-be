<?php
	session_start();
	require_once "./functions/admins.php";
	$title = "Edit product";
	//require_once "./template/header.php";
	require_once "./khung.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($id)){
		echo "Empty isbn! check again!";
		exit;
	}

	// get book data
	$query = "SELECT * FROM thoitrangchoebe WHERE id = '$id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form style = "margin-top: 10px" method="post" action="edit3.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ID</th>
				<td><input type="text" name="id" value="<?php echo $row['id'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Tensp</th>
				<td><input type="text" name="tensp" value="<?php echo $row['tênsp'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Thongtinsp</th>
				<td><textarea name="thongtinsp" cols="40" rows="5"><?php echo $row['thôngtinsp'];?></textarea>
			</tr>
			<tr>
				<th>Gia</th>
				<td><input type="text" name="price" value="<?php echo $row['giá'];?>" required></td>
			</tr>
            <tr>
				<th>nhàsảnxuất</th>
				<td><textarea name="nhàsảnxuất" cols="40" rows="5"><?php echo $row['nhàsảnxuất'];?></textarea>
			</tr>
			
		</table>
		
		<input type="submit" name="save_change" value="Change" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
	<!-- <a href="admin_products.php" class="btn btn-success">Confirm</a> -->
