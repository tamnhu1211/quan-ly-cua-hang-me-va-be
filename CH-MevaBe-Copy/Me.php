<?php
require_once "./template/header.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
    
$row = selectAllLatestProdutsMe($conn);
?>
<h6 style="margin-top: 170px">Thời trang dành cho mẹ</h6>
        <div style=  "margin-top: 10px" class="row">
            <?php foreach($row as $product) { ?>
      	    <div class="col-md-3">
      		    <a href="product_me.php?id=<?php echo $product['id']; ?>">
                <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $product['hìnhảnh']; ?>">
                </a>
      	    </div>
                <?php } ?>
        </div>
