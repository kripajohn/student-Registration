<?php
  include "header.php";
  include_once "../controllers/student_controller.php";
  include('../config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['submit'])){
    $uname=$_POST['user_name'];
    $psw=$_POST['password'];
    $conn=new student_controller();
    $conn->login_data($uname,$psw);
  }
?>
<div class="row">
   <div class="login">
   <form action="" method="post">
    <h1>   Login </h1>
	<input type="text" name="user_name" class="fld" placeholder="User Name">
	<input type="text" name="password" class="fld" placeholder="Password"><br>
	<input type="submit" name="submit" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>