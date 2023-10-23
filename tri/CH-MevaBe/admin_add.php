<?php

	session_start();
	require_once "./functions/admins.php";
	$title = "Add new product";
	require "./template/header.php";
	require "./functions/database_functions.php";
	$conn = db_connect();


	if (isset($_POST['add'])){
		$id = $_POST['id'];
		$tênsp = $_POST['tênsp'];
		$hìnhảnh = $_FILES['hìnhảnh']['name'];
		$hìnhảnh_tmp = $_FILES['hìnhảnh']['tmp_name'];
		$thôngtinsp = $_POST['thôngtinsp'];
		$giá = (float)($_POST['giá']);
		$nhàsảnxuất = $_POST['nhàsảnxuất'];
		
			$sql = "INSERT INTO products (id,tênsp, hìnhảnh, thôngtinsp, giá, nhàsảnxuất)
					VALUES($id,$tênsp,$hìnhảnh,$thôngtinsp,$giá,$nhàsảnxuất)";
					$query = mysqli_query($conn,$sql);
					move_uploaded_file($hìnhảnh_tmp,"assets/images/".$hìnhảnh);
	}				

?>
	<form style= "margin-top: 170px" method="post" action="admin_add.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ID</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>Tên SP</th>
				<td><input type="text" name="tênsp" required></td>
			</tr>
			<tr>
				<th>Hình ảnh</th>
				<td><input type="file" name="hìnhảnh"></td>
			</tr>
			<tr>
				<th>Thông tin sp</th>
				<td><textarea name="thôngtinsp" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Giá</th>
				<td><input type="decimal" name="giá" required></td>
			</tr>
			<tr>
				<th>Nhà sản xuất</th>
				<td><input type="text" name="nhàsảnxuất" required></td>
			</tr>
		</table>
		<input type="submit" name="add" value="Add new book" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>