<?php
session_start();
if(!isset($_SESSION['user']))
{
	//echo "<script> window.open('index.php') </script>";
	header('Location:index.php');
}

include('mywork/work.php');
$obj =new works();

?>
<html  dir="">
<head>
    <!--===============================================================================================-->
	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-rtl.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/DataTable.css">
  </head>
  
  <body>
  <div class="container">
  <div  class="jumbotron">
  <h2> مدير الموقع </h2>
  
  	<h3> اهلا وسهلا !<?php echo ucfirst($_SESSION['user']); ?> </h3>
	<a href="dashbord.php" class="btn btn-primary" >الرئيسية  </a>
	<a href="category.php" class="btn btn-primary" >الاصناف </a>
	<a href="logout.php" class="btn btn-danger pull-left">خروج </a>
  </div> <!--end header-->