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

    <link rel="stylesheet" href="./assets/css/sb-admin-2.min.css" >

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <header class="header-area header-sticky">
        <div style= "margin-top: 5px" class="container">
            <div class="row">
                <div class="col-12">
                    <nav style= "min-height: 20px; " class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.jpg">
                        </a>


                        <!-- Topbar Navbar -->
                        
                        <!-- ***** Logo End ***** -->
                        

                        <!-- ***** Menu Start ***** -->
                        <ul style= "margin-top: 50px   " class="nav">
                        <form  method="post" action="search.php"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div style="width: 400px" class="input-group">
                            <input type="text"name="noidung" class="form-control bg-light border-0 small" placeholder="Search for..." 
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                            
                                <button class="btn btn-primary" type="submit" name="search">
                                
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                                
                            </div>
                            
                        </div>
                    </form>
                    
                            <li class="scroll-to-section"><a href="index.php" >Trang chủ</a></li>
                            <!-- <li class="scroll-to-section"><a href="timkiem.php">Tìm kiếm</a></li> -->
                            <li class="scroll-to-section"><a href="Bim.php">Bỉm và tã</a></li>
                            <li class="scroll-to-section"><a href="Me.php">Mẹ</a></li>
                            <li class="scroll-to-section"><a href="Be.php">Bé</a></li>
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
                                <li class="scroll-to-section"><a href="cart.php">Giỏ hàng</a></li>
                                
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
        