<?php
	session_start();
	require_once "./functions/admins.php";
	$title = "List product";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll1($conn);
	//$result2 = getAll2($conn);
	//$result3 = getAll3($conn);
	//$result4 = getAll4($conn);
?>
	<p class="lead" style= "margin-top: 150px"><a href="admin_add.php">Thêm sản phẩm mới</a></p>
	<a href="admin_signout.php" class="btn btn-primary">Đăng xuất!</a>
	<table class="table" style="margin-top: 60px">
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
			<td><?php echo $row['hìnhảnh']; ?></td>
			<td><?php echo $row['thôngtinsp']; ?></td>
			<td><?php echo $row['giá']; ?></td>
			<td><?php echo $row['nhàsảnxuất']; ?></td>
			<td><a href="admin_edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
			<td><a href="admin_delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

	
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>
<style>
	p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
</style>	