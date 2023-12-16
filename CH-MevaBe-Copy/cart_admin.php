<!-- <?php
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

	// nếu nhấp vào nút lưu thay đổi, hãy thay đổi số lượng của mỗi sp
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $id =>$qty){
			if($_POST[$id] == '0'){
				unset($_SESSION['cart']["$id"]);
			} else {
				$_SESSION['cart']["$id"] = $_POST["$id"];
			}
		}
	}

	// print out header here
	$title = "Your shopping cart";
	require "./khung.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?>
   	<form style= "margin-top: 30px" action="cart.php" method="post">
	   	<table class="table">
	   		<tr>
	   			<th>Tên SP</th>
	   			<th>Giá</th>
	  			<th>Số lượng</th>
	   			<th>Tổng</th>
                <th>Trạng thái</th>

	   		</tr>
			
	   		<?php
				 
			// 		foreach($_SESSION['cart'] as $id =>$qty ){
			// 			$conn = db_connect();
						
			// 				$product = mysqli_fetch_assoc(getproductByIsbn($conn, $id));

						
			// 				//$product = mysqli_fetch_assoc(getproductBe($conn, $id));
						
			// ?>
			 <?php
			//  } 
			 ?>
				<!-- <tr>
					<td><?php echo $product['tênsp'] . " by " . $product['nhàsảnxuất']; ?></td>
					<td><?php echo "$" . $product['giá']; ?></td>
					<td><input type="text" value="<?php echo $qty; ?>" size="2" name="<?php echo $id; ?>"></td>
					<td><?php echo "$" . $qty * $product['giá']; ?></td>
				</tr> -->
					
					
							
			
		    <tr>
		    	<!-- <th>&nbsp;</th>
		    	<th>&nbsp;</th> -->
		    	<!-- <th><?php echo $_SESSION['total_items']; ?></th>
		    	<th><?php echo "$" . $_SESSION['total_price']; ?></th> -->
                <!-- <th></th> -->
		    </tr>
	   	</table>
	   	 <!-- <input  type="submit" class="btn btn-primary" name="save_change" value="Lưu"> -->
	</form>
	<br/><br/>
	<!-- <a   href="checkout.php" class="btn btn-primary">Thanh toán</a> 
	<a href="index.php" class="btn btn-primary">Tiếp tục mua sắm</a> -->
<?php
	} else {
		echo "<p class=\"text-warning\">Giỏ của bạn trống trơn! Hãy chắc chắn rằng bạn thêm một số sản phẩm trong đó!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	//require_once "./template/footer.php";
?>
<style>
    input btnbtn-primary{
        margin-left: 10px;
    }
    .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
    color: #000;
	background:#4e73df;
    }
     .th1 {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
    
    }
    /* th{
	 color: #000;
	 background:#4e73df; */
 
	p{
        margin-top: 170px;
	}
	</style> -->