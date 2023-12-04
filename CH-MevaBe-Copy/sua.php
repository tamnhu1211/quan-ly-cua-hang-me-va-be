<?php
	
	require_once "./template/header.php";
    require_once "./functions/database_functions.php";
    $conn = db_connect();
    
  $row = selectAllLatestProdutsSua($conn);
?>




     <h6 style="margin-top: 170px">Sữa dành cho mẹ và bé</h6>
        <div style=  "margin-top: 10px" class="row">
            <?php foreach($row as $product) { ?>
      	    <div class="col-md-3">
      		    <a href="product_sua.php?id=<?php echo $product['id']; ?>">
                <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $product['hìnhảnh']; ?>">
                </a>
      	    </div>
                <?php } ?>
        </div>
     <!-- <body>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap');
        *{
            padding: 0;
            margin: 0;
           
        }
        body{
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            color: #111;
            line-height: 1.15;
        }
        #wrapper{
            max-width: 1170px;
            margin: 0 auto;
        }
        .headline{
            text-align: center;
            margin: 40px 0px;
        }
        h3{
            font-size: 18px;
            color: #111;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid #bebebe;
            display: inline-block;
            color: #555;
            font-weight: 600;
        }
        ul.products{
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        ul.products li{
            flex-basis: 25%;
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }
        ul.products li img{
            max-width: 100%;
            height: auto;
        }
        ul.products li .product-top{
            position: relative;
            overflow: hidden;
        }
        ul.products li .product-top .product-thumb{
            display: block;
        }
        ul.products li:hover .product-top .product-thumb img{
            filter: opacity(80%);
        }
        ul.products li .product-top .product-thumb img{
            display: block;
        }
        ul.products li .product-top a.buy-now{
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color: #446084;
            color: #fff;
            padding: 10px 0px;
            position: absolute;
            bottom: -36px;
            width: 100%;
            transition: 0.25s ease-in-out;
            opacity: 0.85;
        }
        ul.products li:hover a.buy-now{
            bottom: 0px;
        }
        ul.products li .product-info{
            padding: 10px 0px;
        }
        ul.products li .product-info a{
            display: block;
            text-decoration: none;
        }
        ul.products li .product-info a.product-cat{
            font-size: 11px;
            text-transform: uppercase;
            color: #9e9e9e;
            padding: 3px 0px;
        }
        ul.products li .product-info a.product-name{
            color: #334862;
            padding: 3px 0px;
        }
        ul.products li .product-info .product-price{
            color: #111;
            padding: 2px 0px;
            font-weight: 600;
        }
    </style>
    <div id="wrapper">
        <div class="headline">
            <h3>Sản phẩm Sữa dành cho mẹ và bé</h3>
        </div>
        <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                        
                        <a href="product_sua.php"><img src="assets/images/h1.jpg" alt=""></a>
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>
                                 
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho mẹ bầu </a>
                        <a href="" class="product-name">PREGNANT MOTHER FORMULAR</a>
                        <div class="product-price">290.000</div>
                    </div>  
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="assets/images/h2.gif" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>           
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho mẹ bầu  </a>
                        <a href="" class="product-name">Auramil MOM</a>
                        <div class="product-price">350.000</div>
                    </div>  
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="assets/images/h3.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>          
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho mẹ bầu </a>
                        <a href="" class="product-name">Frisomum Gold</a>
                        <div class="product-price">380.000</div>
                    </div>  
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="assets/images/h4.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>          
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho mẹ bầu  </a>
                        <a href="" class="product-name">Similac Mom</a>
                        <div class="product-price">450.000</div>
                    </div>  
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="assets/images/h5.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>          
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho em bé </a>
                        <a href="" class="product-name">Frisolac Gold</a>
                        <div class="product-price">690.000</div>
                    </div>  
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="assets/images/h6.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>          
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho em bé </a>
                        <a href="" class="product-name">Optimum Gold</a>
                        <div class="product-price">670.000</div>
                    </div>  
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="assets/images/h7.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>          
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho em bé </a>
                        <a href="" class="product-name">Infatrini Nutricia Pulver</a>
                        <div class="product-price">290.000</div>
                    </div>  
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="assets/images/h8.jpg" alt="">
                        </a>
                        <a href="" class="buy-now">Mua ngay</a>            
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"> Sữa dành cho em bé </a>
                        <a href="" class="product-name">Similac Newborn</a>
                        <div class="product-price">280.000</div>
                    </div>  
                </div>
            </li>
        </ul>
    </body>
     </html> -->   