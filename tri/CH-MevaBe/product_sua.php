<?php
  session_start();
  $id = $_GET['id'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  
  $query = "SELECT * FROM products WHERE id = '$id'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }


  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }

  

  $ten = $row['tênsp'];
  require "./template/header.php";
?>
      <!-- Example row of columns -->
     
      <p class="lead" style= "margin-top: 150px"><a href="#">Products</a> > <?php echo $row['tênsp']; ?></p>
      <div class="row"style= "margin-top: 30px">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $row['hìnhảnh']; ?>">
        </div>
        <div class="col-md-6">
          <h4>Thông tin sp</h4>
          <q ><?php echo $row['thôngtinsp']; ?></q>
          <h4>Chi tiết sp</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "thôngtinsp" || $key == "hìnhảnh" || $key == "publisherid" || $key == "tênsp"){
                continue;
              }
              switch($key){
                case "id":
                  $key = "id";
                  break;
                case "nhàsảnxuất":
                  $key = "NSX";
                  break;
                case "giá":
                  $key = "Giá";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="bookisbn" value="<?php echo $book_isbn;?>">
            <input type="submit" value="Mua/Thêm vào giỏ hàng" name="cart" class="btn btn-primary">
          </form>
       	</div>
      </div>
<?php
  require "./template/footer.php";
?>