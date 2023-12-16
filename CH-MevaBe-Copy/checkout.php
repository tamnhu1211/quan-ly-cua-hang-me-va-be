<!-- <?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_GET['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	session_start();
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Checking out";
	require "./template/header.php";
	if(isset($_POST['save_change'])){
		var_dump ($_POST);

		if(isset($_POST['save_change'])){
			foreach ($_SESSION["cart"] as $id => $qty){
				$_SESSION["cart"][$id] = $_POST["$id"];
			}
		}
		
		
	}
	if(isset($_POST['submit'])){
		echo($id);
		//echo"thành công";
		var_dump ($_POST);
	// 		if(empty($_POST['name'])){
	// 			$error = "nhập ten";
	// 			echo "nhap tem";
	// 		}elseif(empty($_POST['address'])){
	// 			$error = "nhập ten";
	// 			echo "nhap dai chi";
	// 		}elseif(empty($_POST['city'])){
	// 			$error = "nhập ten";
	// 			echo "nhap sdt";
	// 		}
		
	}
	if(isset($_SESSION['cart']) ){
?>
	<table style= "margin-top: 170px" class="table">
		<tr>
			<th>Tên sp</th>
			<th>Giá</th>
	    	<th>Số lượng</th>
	    	<th>Tổng</th>
	    </tr>
	    	<?php
			    foreach($_SESSION['cart'] as $isbn => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getproductByIsbn($conn, $isbn));
			?>
		<tr>
			<td><?php echo $book['tênsp'] . " by " . $book['nhàsảnxuất']; ?></td>
			<td><?php echo "$" . $book['giá']; ?></td>
			<td><?php echo $qty; ?></td>
			<td><?php echo "$" . $qty * $book['giá']; ?></td>
		</tr>
		<?php } ?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo $_SESSION['total_items']; ?></th>
			<th><?php echo "$" . $_SESSION['total_price']; ?></th>
		</tr>
		<?php
			// echo($isbn);
			// echo($qty);
		?>
	</table>
	<form style= "margin-left: 170px" method="post" action="checkout.php?action=submit" class="form-horizontal">
		<?php if(isset($_SESSION['name']) && $_SESSION['address'] == 1){ ?>
			<p class="text-danger">All fields have to be filled</p>
			<?php } ?>
			<table class="table">
			<tr>
				<th>Tên</th>
				<td><input type="text" name="id"required></td>
			</tr>
			<tr>
				<th>Số Điện Thoại</th>
				<td><input type="text" name="tênsp" required></td>
			</tr>
			
			<tr>
				<th>Địa chỉ</th>
				<td><input type="text" name="giá" required></td>
			</tr>
			<tr>
				<th>Ghi chú</th>
				<td><textarea name="thôngtinsp" cols="40" rows="5"></textarea></td>
			</tr>
			<?php

			?>
			
		</table>
		
		<div class="form-group">
			<input type="submit" name="submit" value="Mua hàng" >
		</div>
	</form>
	<!-- <p class="lead">Please press Purchase to confirm your purchase, or Continue Shopping to add or remove items.</p> -->
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?> -->