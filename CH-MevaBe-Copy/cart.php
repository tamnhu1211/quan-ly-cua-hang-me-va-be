<?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_POST['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	session_start();
	require_once "./functions/database_functions.php";
	require_once "./functions/cart_functions.php";
	
	
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
	}

	if(isset($id)){
		// new iem selected
		if(!isset($_SESSION['cart'])){
			
			 $_SESSION['cart'] = array();

			$_SESSION['total_items'] = 0;
			$_SESSION['total_price'] = '0.00';
		}

		if(!isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id] = 1;
		} elseif(isset($_POST['cart'])){
			$_SESSION['cart'][$id]++;
			unset($_POST);
		} 
		
	}
	// if(isset($_POST['save_change'])){
	// 	echo "submit";
	// 	foreach($_SESSION['cart'] as $id =>$qty){		
	// 		if($_POST[$id] == '0'){
	// 			unset($_SESSION['cart']["$id"]);
	// 		} else {
	// 		 	$_SESSION['cart']["$id"] =$_POST["$id"];

	// 		}
	// 	}
		
	// }
	if(isset($_POST['save_change'])){
		//var_dump ($_POST);
		foreach($_SESSION['cart'] as $id =>$qty){
			if($_POST[$id] != '0'){
				$_SESSION['cart'][$id] =$_POST[$id];
			}
		}
		
		// if(isset($_POST['save_change'])){
		// 	foreach ($_SESSION["cart"] as $id => $qty){
		// 		$_SESSION["cart"][$id] = $_POST["$id"];
		// 	}
		// }
		
		
	}

	if(isset($_GET['cart'])){
		switch(isset($_GET['cart'])){
		case "delete":
			if(isset($_GET['id'])){
				unset($_SESSION['cart'][$_GET['id']]);
			}
			break;
		case "submit":
			echo "submit button";exit();
			break;	
		
		}
		

	}
	// nếu nhấp vào nút lưu thay đổi, hãy thay đổi số lượng của mỗi sp
	
	//echo"$qty";
	// print out header here
	$title = "Your shopping cart";
	require "./template/header.php";
	
	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?>
   	<form style= "margin-top: 170px" action="cart.php?action=submit" method="post">
	   	<table class="table">
	   		<tr>
	   			<th>Tên SP</th>
				<th>Hình Ảnh</th>
	   			<th>Giá</th>
	  			<th>Số lượng</th>
	   			<th>Tổng</th>
				<th>Xóa sp</th>
	   		</tr>
			
	   		<?php
				foreach($_SESSION['cart'] as $id =>$qty ){
						$conn = db_connect();
						
					$rows =mysqli_fetch_assoc(getproductByIsbn($conn, $id));
				
							?>
							<tr>
								<td><?php echo $rows['tênsp'] . " by " . $rows['nhàsảnxuất']; ?></td>
								<td><img class="img" src="./assets/images/<?php
								 echo $rows['hìnhảnh'];
								  ?>"></td>
								<td><?php echo "$" . $rows['giá']; ?></td>
								<td><input type="text" value="<?php echo $qty; ?>" size="2" name="<?php echo $id; ?>"></td>
								<td><?php echo "$"  . $qty * $rows['giá']; ?></td>
								<td><a href="cart.php?cart=detete&id=<?=$id?>">Xóa</a></td>
							</tr>
				<?php 	
			}
		
				?>
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
				<th>&nbsp;</th>
		    	<th><?php echo $_SESSION['total_items']; ?></th>
		    	<th><?php 
					echo "$".$_SESSION['total_price'];
				  ?>
				</th>
		    </tr>
	   	</table>
	   	<input  type="submit"  name="save_change" value="Save Changes"/>
	</form>
	<br/><br/>
	<a   href="checkout.php" class="btn btn-primary">Thanh toán</a> 
	<a href="index.php" class="btn btn-primary">Tiếp tục mua sắm</a>
	<style>
	p{
margin-top: 170px;
	}
	</style>
<?php
	} else {
		echo "<h1 class=\"text-warning\">Giỏ của bạn trống trơn! Hãy chắc chắn rằng bạn thêm một số sản phẩm trong đó!</h1>";
	}
	
	if(isset($conn)){ mysqli_close($conn); }
	
	require_once "./template/footer.php";
?>

<style>
	h1	{
		font-size: medium;
		margin-top: 170px;
	}
	img{
	width: 100px;
}
	</style>
  