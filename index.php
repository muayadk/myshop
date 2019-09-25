<?php session_start(); ?>
<html  dir="">
<head>
    <!--===============================================================================================-->
	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-rtl.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  </head>
  
  <body>
  <div class="container">
  <div  class="jumbotron">
  <h2> مدير الموقع </h2>
  </div>
  <div class="row">
  
	  <div class="col-sm-4 col-sm-offset-4">
		<h2> تسجيل الدخول </h2>
		<form action="" method="post">
		<table class="table">
		<tr>
		
		<td> اسم المستخدم:</td>
		<td> <input type="text" name="user_name" class="form-control"required /> </td>
		
		</tr>
		<tr>
		<td>كلمة السر:</td>
		<td><input type="password" name="password" class="form-control" required /> </td>
		</tr>
		<tr> 
		<td></td> 
		<td> <input type="submit" name="login" value="دخول"  class="btn btn-success"></dt>
		</tr>
		</table>
		</form>
		  
  <?php 
  if(isset($_POST['login']))
  {
	  $a=$_POST['user_name'];
	  $b=$_POST['password'];
	  
	  include("mywork/work.php");
	  
	   $obj=new works();
	 $u= $obj->login($a,$b);//
	 
	 if($u >0)
	 {
		 $_SESSION['user']=$a;
		header("Location:dashbord.php");
		// echo"<script> alert('تم الدخول بنجاح') </script>";
	 }
	 else
	 {
		 echo"<script> alert('فشل تسجيل الدخول') </script>";
	 }
  
  }
  ?>
  
		
	  </div>
  </div>
  
  </div>

  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
  
  
  
  
  
    <!-- Scripts -->

	 <script src="js/jquery-ui-1.12.1.min.js"></script>

	     <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>