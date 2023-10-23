<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $title; ?></title>
    

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css">

    <link rel="stylesheet" href="./assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="./assets/css/owl-carousel.css">

    <link rel="stylesheet" href="./assets/css/lightbox.css">

    </head>
    <body>
        <header class="header-area header-sticky">
        <div style= "margin-top: 5px" class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.jpg">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Trang chủ</a></li>
                            <li class="scroll-to-section"><a href="#Bimr">Bỉm và tã</a></li>
                            <li class="scroll-to-section"><a href="#women">Mẹ</a></li>
                            <li class="scroll-to-section"><a href="#kids">Bé</a></li>
                            <!-- <li class="submenu"> -->
                            <li class="scroll-to-section"><a href="sua.php">Sữa</a></li>
                                <!-- <ul>
                                    <li><a href="about.html">Dành cho em bé</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="single-product.html">Dành cho mẹ bầu</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul> -->
                            <!-- </li> -->
                            <!-- <li class="submenu"> -->
                                <li class="scroll-to-section"><a href="giohang.php">Giỏ hàng</a></li>
                                
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
        
        </header>
        <?php
      if(isset($title) && $title == "Index") {
        ?>
        <?php } ?>
        <div  class="container" id="main">
   