
<?php include('header.php'); ?>

  <div class="row">
  
  <div class="col-sm-4 col-sm-offset-4">
  
	<h2>  ادارة المنتجات </h2>
	
		<form action="" method="post">
		<table class="table">
		<tr>
		<td>اسم المنتج:</td>
		<td> <input type="text" name="product_name" class="form-control" required /> </td>
		</tr>
		
		<tr>
		<td>السعر:</td>
		<td> <input type="text" name="product_price" class="form-control" required /> </td>
		</tr>
		
		<tr>
		<td>تفاصيل  المنتج:</td>
		<td> <textarea type="text" name="product_details" class="form-control" required />  </textarea></td>
		</tr>
		
		<tr>
		<td> المجموعة</td>
		<td> <input type="text" name="product_tags" class="form-control"  /> </td>
		</tr>
		
		<tr>
		<td>الصنف </td>
		<td> <select  name="cat_id" class="form-control"  /> 
		<option value="0"> اختار الصنف</option>
	
		<?php 
		  $obj =new works();
		  $cat =$obj->getAllCategory();
		  
		 foreach($cat as $c)
		 {
			 echo'<option value="'.$c['cat_id'].'" > '.$c['cat_name'].' </option>';
		 }
			 
		?>
		</select>
		</td>
		</tr>
		
		<tr> 
		<td></td> 
		<td> <input type="submit" name="addproduct" value="حفظ"  class="btn btn-success"></dt>
		</tr>
		</table>
		</form>
	</div>
	
	
	<?php 
	if(isset($_POST['addproduct']))
	{
		$e=$_POST['cat_id'];
		if($e==0)
		{
			echo"يجب علي اختيار الصنف";
		}
		else
		{
		$a=$_POST['product_name'];
		$b=$_POST['product_price'];
		$c=$_POST['product_details'];
		$d=$_POST['product_tags'];
			
		$obj->addproduct($a,$b,$c,$d,$e);
		echo"<script> alert('تم حفظ الصنف باسم $a') </script>";
		}
		
	}
	
	?>
	
	

	
  </div><!--row-->
  
  
		<link rel="stylesheet" type="text/css" href="css/DataTable.css">
		<script src="js/jq.js"></script>
		<script src="js/DataTable.js"></script>
		
		<script language="javascript">
				$(document).ready(function() {
					$("#mytable").DataTable();
				} );
		
		</script>
		
  
  
	<div class="row">
	  <div class="col-sm-6 col-sm-offset-4">
	  
		<h2> قائمة المنتجات </h2>
		

		
		<table class="display" id="mytable">
		<thead>
		<tr>
		<th> الرقم</th> 
		<th>اسم المنتج </th>
		<th>السعر </th>
		<th>التفاصيل </th>
		<th>التاج </th>
		</tr>
		</thead>
		<tbody>
			<?php 
				$pro=$obj->getAllproduct();
				foreach($pro as $p )
				{
				echo"<tr>";
				echo"<td>".$p['product_id']."</td>";
				echo"<td>".$p['product_name']."</td>";
			    echo"<td>".$p['product_price']."</td>";
				echo"<td>".$p['product_details']."</td>";	
				echo"<td>".$p['product_tags']."</td>";			
				echo"</tr>";
				}
					
			?>
			</tbody>
			
			</table>
	</div>
		</div><!--row-->
	
	
	
	
	
	<!--footer-->
	

<hr/>
  <div class="model-footer pull-left">
  <p> &copy; حقوق الطبع محفوظة </p>
  <p>مطور الموقع م/مؤيد اسماعيل</p>
  </div><!--end footer-->
  
  
  </div><!--container-->

  
