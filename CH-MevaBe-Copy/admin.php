<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

<!-- action="admin_verify.php" -->
<!-- <form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Pass</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-primary">
	</form> -->

<!-- <style>
    body{
    padding-top: 100px;
    padding-bottom: 20px;
    margin-left: 300px;
    }

#main > :first-child{
	margin-top: 70px;
    width: 1500px;
}
</style> -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
	
<!-- bg-gradient-primary -->
<body class="">
<style>
	body{
		background-color:#fff;
		
	}
    img{
        width: 480px;
        height: 550px;
    }
</style>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div style= "margin-top: 85px"  class="row">
                        <!-- col-lg-6 d-none d-lg-block bg-login-image -->
                            <div class="col-lg-6 d-none d-lg-block ">
                                <img  src="assets/images/left-banner-image.jpg" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Chào mừng bạn trở lại</h1>
                                    </div>
                                    <form class="user"  method="post" action="admin_verify.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="name"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nhập username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="pass"
                                                id="exampleInputPassword" placeholder="Mật khẩu">
                                        </div>
                                        
										<input type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                        <!-- <label for="remember">Nhớ đăng nhập</label>
                                        <input type="checkbox" name="remember" id="remember"> -->
                                        <hr>
                                        <a href="dangky.php" class="btn btn-facebook btn-user btn-block">
                                            <i class="#"></i> Đăng Ký
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>


</html>

<!-- <style>
    body{
    padding-top: 100px;
    padding-bottom: 20px;
    margin-left: 300px;
    }

#main > :first-child{
	margin-top: 70px;
    width: 1500px;
}
</style> -->