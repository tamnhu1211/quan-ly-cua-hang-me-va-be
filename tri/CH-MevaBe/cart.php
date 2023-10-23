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

	// book_isbn got from form post method, change this place later.
	if(isset($_POST['id'])){
		$id = $_POST['id'];
	}

	if(isset($id)){
		// new iem selected
		if(!isset($_SESSION['cart'])){
			// $_SESSION['cart'] is associative array that bookisbn => qty
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

	// nếu nhấp vào nút lưu thay đổi, hãy thay đổi số lượng của mỗi cuốn sách
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $isbn =>$qty){
			if($_POST[$isbn] == '0'){
				unset($_SESSION['cart']["$isbn"]);
			} else {
				$_SESSION['cart']["$isbn"] = $_POST["$isbn"];
			}
		}
	}

	// print out header here
	$title = "Your shopping cart";
	//require "./template/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?>
   	<form style= "margin-top: 170px" action="cart.php" method="post">
	   	<table class="table">
	   		<tr>
	   			<th>Item</th>
	   			<th>Price</th>
	  			<th>Quantity</th>
	   			<th>Total</th>
	   		</tr>
			
	   		<?php
					$conn = db_connect();
					$product = mysqli_fetch_assoc(getproductByIsbn($conn, $id));
			?>
			

			<tr>
				<td><?php echo $product['tênsp'] . " by " . $product['nhàsảnxuất']; ?></td>

				<td><?php echo "$" . $product['giá']; ?></td>

				<td><input type="text" value="<?php echo $qty; ?>" size="2" name="<?php echo $id; ?>"></td>

				<td><?php echo "$" . $qty * $product['giá']; ?></td>
			</tr>
			<?php } ?>
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
		    	<th><?php echo $_SESSION['total_items']; ?></th>
		    	<th><?php echo "$" . $_SESSION['total_price']; ?></th>
		    </tr>
	   	</table>
	   	<!-- <input type="submit" class="btn btn-primary" name="save_change" value="Save Changes"> -->
	</form>
	<br/><br/>
	<a href="checkout.php" class="btn btn-primary">Thanh toán</a> 
	<!-- <a href="books.php" class="btn btn-primary"></a> -->
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>