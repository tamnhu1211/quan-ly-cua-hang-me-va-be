<!-- <?php

	session_start();
	require_once "./functions/admins.php";
	$title = "Add new product";
	//require "./template/header.php";
	require_once "./khung.php";
	require "./functions/database_functions.php";
	$conn = db_connect();

	$category = mysqli_query($conn,"SELECT *FROM categories");

	

	if (isset($_POST['add'])){
		$id = $_POST['id'];
		$tênsp = $_POST['tênsp'];
		$hìnhảnh = $_FILES['hìnhảnh']['name'];
		$hìnhảnh_tmp = $_FILES['hìnhảnh']['tmp_name'];
		 $category_id = $_POST['category'];
		$thôngtinsp = $_POST['thôngtinsp'];
		$giá = (float)($_POST['giá']);
		$nhàsảnxuất = $_POST['nhàsảnxuất'];
		// INSERT INTO `products` (`id`, `tênsp`, `hìnhảnh`, `thôngtinsp`, `giá`, `nhàsảnxuất`) VALUES
		if(isset($_POST['add'])){
			$sql = "INSERT INTO products (id, tênsp, hìnhảnh, category_id, thôngtinsp, giá, nhàsảnxuất)
					VALUES('$id','$tênsp','$hìnhảnh','$category_id','$thôngtinsp','$giá','$nhàsảnxuất')";
					// $sql = "INSERT INTO products (product_name, product_description, product_price)
					//  VALUES ('$product_name', '$product_description', $product_price)";
					// $query = mysqli_query($conn,$sql);
					move_uploaded_file($hìnhảnh_tmp,"assets/images/".$hìnhảnh);
					if ($conn->query($sql) === TRUE) {
						echo "Sản phẩm đã được thêm thành công.";
					} else {
						echo "Lỗi: " . $sql . "<br>" . $conn->error;
					}
				}
			else{
				$sql = "INSERT INTO bỉm (id, tênsp, hìnhảnh, category_id, thôngtinsp, giá, nhàsảnxuất)
					VALUES('$id','$tênsp','$hìnhảnh','$category_id','$thôngtinsp','$giá','$nhàsảnxuất')";
					// $sql = "INSERT INTO products (product_name, product_description, product_price)
					//  VALUES ('$product_name', '$product_description', $product_price)";
					// $query = mysqli_query($conn,$sql);
					move_uploaded_file($hìnhảnh_tmp,"assets/images/".$hìnhảnh);
					if ($conn->query($sql) === TRUE) {
						echo "Sản phẩm đã được thêm thành công.";
					} else {
						echo "Lỗi: " . $sql . "<br>" . $conn->error;
					}
			}	
			
	}
	
?>
		<div class="container-fluid">
	<form style= "margin-top: 20px" method="post" action="admin_add.php" enctype="multipart/form-data">
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
				<th><label for="category">Loại Sản Phẩm</label></th>
    			<td><select name="category">
        			<!-- Load danh sách loại sản phẩm từ cơ sở dữ liệu và hiển thị -->
					<option value=""></option>
        			<?php foreach ($category as $key => $value) { ?>
					<option value="<?php echo $value['id'] ?>">
						<?php echo $value['name'] ?>
					</option>
					<?php } ?>
        			
    			</select></td>
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

	<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
 -->
