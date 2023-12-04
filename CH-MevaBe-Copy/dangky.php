<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="./asets/css/dangky.css"/>
</head>
<body>

<form style= "margin-top: 150px" method="post" action="dangky.php" class="form">

<h2>Đăng ký thành viên</h2>

Username: <input type="text" name="username" value="" required>
<br><br>
Password: <input type="text" name="password" value="" required/>
<br><br>
Email: <input type="email" name="email" value="" required/>
<br><br>
Phone: <input type="text" name="phone" value="" required/>
<br><br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
<input type="submit" name="dangky" value="Đăng Ký"/>
<?php require 'xuly.php';?>
</form>

</body>
</html>
<style>
  
.form {
  line-height: 15px;
    width: 500px;
    border: 1px solid green;
    padding: 15px;
    margin: 0 auto;
    font-weight: 700px;
   }
   .form input {
   
    width: 100%;
    padding: 5px 0;
   }
</style>   