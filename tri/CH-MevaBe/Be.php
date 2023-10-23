<?php
require_once "./template/header.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
    
$row = selectAllLatestProdutsBe($conn);
?>
<h6 style="margin-top: 170px">Thời trang dành cho bé</h6>
        <div style=  "margin-top: 10px" class="row">
            <?php foreach($row as $product) { ?>
      	    <div class="col-md-3">
      		    <a href="product_be.php?id=<?php echo $product['id']; ?>">
                <img style="height:200px" class="img-responsive img-thumbnail" src="./assets/images/<?php echo $product['hìnhảnh']; ?>">
                </a>
      	    </div>
                <?php } ?>
        </div>
