<?php
	function db_connect(){
		$conn = mysqli_connect("localhost", "root", "", "database");
		if(!$conn){
			echo "Can't connect database " . mysqli_connect_error($conn);
			exit;
		}
		return $conn;
	}
	function selectAllLatestProdutsSua($conn){
		$row = array();
		$query = "SELECT id, hìnhảnh FROM products ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 10; $i++){
			array_push($row, mysqli_fetch_assoc($result));
		}
		return $row;
	}
	function selectAllLatestProdutsBim($conn){
		$rows = array();
		$query = "SELECT id, hìnhảnh FROM bỉm ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 10; $i++){
			array_push($rows, mysqli_fetch_assoc($result));
		}
		return $rows;
	}
	function selectAllLatestProdutsBe($conn){
		$rowss = array();
		$query = "SELECT id, hìnhảnh FROM thoitrangchoebe ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 8; $i++){
			array_push($rowss, mysqli_fetch_assoc($result));
		}
		return $rowss;
	}
	function selectAllLatestProdutsMe($conn){
		$rowsss = array();
		$query = "SELECT id, hìnhảnh FROM thoitrangchome ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 8; $i++){
			array_push($rowsss, mysqli_fetch_assoc($result));
		}
		return $rowsss;
	}
	function select4LatestProdutsSua($conn){
		$row = array();
		$query = "SELECT id, hìnhảnh FROM products ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 4; $i++){
			array_push($row, mysqli_fetch_assoc($result));
		}
		return $row;
	}

	function select4LatestProdutsBim($conn){
		$rows = array();
		$query = "SELECT id, hìnhảnh FROM bỉm ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 4; $i++){
			array_push($rows, mysqli_fetch_assoc($result));
		}
		return $rows;
	}

	function select4LatestProdutsBe($conn){
		$rowss = array();
		$query = "SELECT id, hìnhảnh FROM thoitrangchoebe ORDER BY id ASC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 4; $i++){
			array_push($rowss, mysqli_fetch_assoc($result));
		}
		return $rowss;
	}
	function select4LatestProdutsMe($conn){
		$rowsss = array();
		$query = "SELECT id, hìnhảnh FROM thoitrangchome ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 4; $i++){
			array_push($rowsss, mysqli_fetch_assoc($result));
		}
		return $rowsss;
	}


	function getproductByIsbn($conn, $id){
		$query = "SELECT tênsp, nhàsảnxuất, giá FROM products WHERE id = '$id'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}

	function getOrderId($conn, $customerid){
		$query = "SELECT orderid FROM orders WHERE customerid = '$customerid'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "retrieve data failed!" . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['orderid'];
	}

	function insertIntoOrder($conn, $customerid, $total_price, $date, $ship_name, $ship_address, $ship_city, $ship_zip_code, $ship_country){
		$query = "INSERT INTO orders VALUES 
		('', '" . $customerid . "', '" . $total_price . "', '" . $date . "', '" . $ship_name . "', '" . $ship_address . "', '" . $ship_city . "', '" . $ship_zip_code . "', '" . $ship_country . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert orders failed " . mysqli_error($conn);
			exit;
		}
	}
	function getproductprice($id){
		$conn = db_connect();
		$query = "SELECT giá FROM products WHERE id = '$id'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "get book price failed! " . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	

	function getCustomerId($name, $address, $city, $zip_code, $country){
		$conn = db_connect();
		$query = "SELECT customerid from customers WHERE 
		name = '$name' AND 
		address= '$address' AND 
		city = '$city' AND 
		zip_code = '$zip_code' AND 
		country = '$country'";
		$result = mysqli_query($conn, $query);
		// if there is customer in db, take it out
		if($result){
			$row = mysqli_fetch_assoc($result);
			return $row['customerid'];
		} else {
			return null;
		}
	}

	function setCustomerId($name, $address, $city, $zip_code, $country){
		$conn = db_connect();
		$query = "INSERT INTO customers VALUES 
			('', '" . $name . "', '" . $address . "', '" . $city . "', '" . $zip_code . "', '" . $country . "')";

		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "insert false !" . mysqli_error($conn);
			exit;
		}
		$customerid = mysqli_insert_id($conn);
		return $customerid;
	}

	// function getPubName($conn, $pubid){
	// 	$query = "SELECT publisher_name FROM publisher WHERE publisherid = '$pubid'";
	// 	$result = mysqli_query($conn, $query);
	// 	if(!$result){
	// 		echo "Can't retrieve data " . mysqli_error($conn);
	// 		exit;
	// 	}
	// 	if(mysqli_num_rows($result) == 0){
	// 		echo "Empty books ! Something wrong! check again";
	// 		exit;
	// 	}

	// 	$row = mysqli_fetch_assoc($result);
	// 	return $row['publisher_name'];
	// }

	function getAll1($conn){
		$query = "SELECT * from products ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data1 " . mysqli_error($conn);
			exit;
		}
		return $result;
	}
	function getAll2($conn){
		$query = "SELECT * from bỉm ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data1 " . mysqli_error($conn);
			exit;
		}
		return $result2;
	}
	function getAll3($conn){
		$query = "SELECT * from thoitrangchoebe ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data1 " . mysqli_error($conn);
			exit;
		}
		return $result3;
	}
	function getAll4($conn){
		$query = "SELECT * from thoitrangchome ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data1 " . mysqli_error($conn);
			exit;
		}
		return $result4;
	}
	
?>