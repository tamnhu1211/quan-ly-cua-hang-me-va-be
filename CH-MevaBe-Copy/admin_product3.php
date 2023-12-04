<?php
	session_start();
	require_once "./functions/admins.php";
	$title = "List product";
	//require_once "./template/header.php";
	require_once "./khung.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll4($conn);
	//$result2 = getAll2($conn);
	//$result3 = getAll3($conn);
	//$result4 = getAll4($conn);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

	<!-- <p class="lead" style= "margin-top: 30px">
	<a href="admin_add.php">Thêm sản phẩm mới</a>
	</p>
	<a href="admin_signout.php" class="btn btn-primary">Đăng xuất!</a> -->
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>ID SP</th>
			<th>Tên SP</th>
			<th>Hình Ảnh</th>
			<th>Thông Tin SP</th>
			<th>Giá</th>
			<th>Nhà Sản Xuất</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)
		//$row2 = mysqli_fetch_assoc($result2)
		//$row3 = mysqli_fetch_assoc($result3)
		//$row4 = mysqli_fetch_assoc($result4)
		){ ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['tênsp']; ?></td>
			<td><img class="img" src="./assets/images/<?php echo $row['hìnhảnh']; ?>"></td>
			<td> <div class="thongtin">
			<?php echo $row['thôngtinsp']; ?>
			</div></td>
			<td><?php echo $row['giá']; ?></td>
			<td><?php echo $row['nhàsảnxuất']; ?></td>
			<td><a href="admin_edit4.php?id=<?php echo $row['id']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    Edit </a></td>
			<td><a href="admin_delete.php?id=<?php echo $row['id']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			Delete </a></td>
			
		<?php } ?>
	</table>
	
	

<style>
	th{
	 color: #000;
	 background:#4e73df;
 }
	p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
img{
	width: 100px;
}
.thongtin {
	overflow: auto;
	height: 100px;
}
</style>	
 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
