<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
   require_once "./functions/database_functions.php";
   $conn = db_connect();
  $row = select4LatestProdutsSua($conn);
  $rows = select4LatestProdutsBim($conn);
  $rowss = select4LatestProdutsBe($conn);
  $rowsss = select4LatestProdutsMe($conn);
?>
<div  class="main-banner" id="top">
        <div class="container-fluid">
            <div  class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We are M&B</h4>
                                <span>Cảm ơn bạn đã tin tưởng, lựa chọn cửa hàng của chúng tôi </span>
                                <div class="main-border-button">
                                    <a href="#">Mua ngay!</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Bé</h4>
                                            
                                            
                                        </div>
                                        
                                        <a href="Be.php"><img src="assets/images/em-be1.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Bỉm và tã</h4>
                                            
                                        </div>
                                        
                                        <a href="Bim.php"><img src="assets/images/ta1.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Mẹ</h4>
                                            
                                        </div>
                                        
                                        <a href="Me.php"><img src="assets/images/mẹ1.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Sữa</h4>
                                            
                                            
                                        </div>
                                        
                                        <a href="sua.php"><img src="assets/images/binh-sua1.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Example row of columns -->
      <p  class="lead text-center text-muted">Sản phẩm mới nhất</p>
      <h6 style="margin-top: 10px">Sữa dành cho mẹ và bé</h6>
        <div style=  "margin-top: 10px" class="row">
            <?php foreach($row as $product) { ?>
      	    <div class="col-md-3">
      		    <a href="product_sua.php?id=<?php echo $product['id']; ?>">
                <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $product['hìnhảnh']; ?>">
                </a>
      	    </div>
                <?php } ?>
        </div>
      <h5>Bỉm và tã</h5> 
      <div style= "margin-top: 50px" class="row">
            <?php foreach($rows as $product) { ?>
      	    <div class="col-md-3">
      		    <a href="product_bim.php?id=<?php echo $product['id']; ?>">
                <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $product['hìnhảnh']; ?>">
                </a>
      	    </div>
                <?php } ?>
        </div> 
        <h5 style="margin-top: 20px">Thời trang dành cho bé</h5> 
      <div style= "margin-top: 50px" class="row">
            <?php foreach($rowss as $product) { ?>
      	    <div class="col-md-3">
      		    <a href="product_be.php?id=<?php echo $product['id']; ?>">
                <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $product['hìnhảnh']; ?>">
                </a>
      	    </div>
                <?php } ?>
        </div> 
        <h5 style="margin-top: 20px">Thời trang dành cho mẹ</h5> 
      <div style= "margin-top: 50px" class="row">
            <?php foreach($rowsss as $product) { ?>
      	    <div class="col-md-3">
      		    <a href="product_me.php?id=<?php echo $product['id']; ?>">
                <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $product['hìnhảnh']; ?>">
                </a>
      	    </div>
                <?php } ?>
        </div>             
<?php
   if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>