<!-- <?php

   require_once "./template/header.php";
   require_once "./functions/database_functions.php";
   $conn = db_connect();
?>
<?php
            if(isset($_POST['search'])){
                $noidung = $_POST['noidung'];
                        //echo $noidung;
                
            }
   ?>
    <div style=  "margin-top: 150px" class="row">
<?php
            //SELECT * FROM bỉm,products WHERE bỉm.tênsp=products.tênsp LIKE '%bỉm%' 

            $sql = "SELECT * FROM products WHERE products.tênsp LIKE '%$noidung%'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
?>
                            <div class="col-md-3">
                            <a href="product_sua.php?id=<?php echo $row['id']; ?>">
                            
                                <img class="img-responsive img-thumbnail" src="./assets/images/<?php echo $row['hìnhảnh']; ?>">
                            
                        </a>
                    
                        </div>
                    
                        <p><?php //echo $row['tênsp'] ?></p>
<?php
                    }
                

?>

    


</div> -->