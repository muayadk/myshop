
<?php include('header.php'); ?>

  <div class="row">
  
  <div class="col-sm-4 col-sm-offset-4">
  
	<h2> ادارة الاصناف </h2>
	
		<form action="" method="post">
		<table class="table">
		<tr>
		
		<td>اسم الصنف:</td>
		<td> <input type="text" name="cat_name" class="form-control" required /> </td>
		
		</tr>
		
		<tr> 
		<td></td> 
		<td> <input type="submit" name="addcat" value="حفظ"  class="btn btn-success"></dt>
		</tr>
		</table>
		</form>
	</div>
	
	
	<?php 
	if(isset($_POST['addcat']))
	{
		$cat_name=$_POST['cat_name'];
		$obj->addcategory($cat_name);
		echo"<script> alert('تم حفظ الصنف باسم $cat_name') </script>";
	}
	
	?>
	
	

	
  </div><!--row-->
  
  
	<div class="row">
	  <div class="col-sm-4 col-sm-offset-4">
	  
		<h2> قائمة الاصناف </h2>
		
		<link rel="stylesheet" type="text/css" href="css/DataTable.css">
		<script src="js/jq.js"></script>
		<script src="js/DataTable.js"></script>
		
		<script language="javascript">
				$(document).ready(function() {
					$("#mytable").DataTable();
				} );
		
		</script>
		

		
		<table class="display" id="mytable">
		<thead>
		<tr>
		<th> الرقم</th> 
		<th>الصنف</th>
		</tr>
		</thead>
		<tbody>
			<?php 
				$cat=$obj->getAllCategory();
				foreach($cat as $c )
				{
				echo"<tr>";
				echo"<td>".$c['cat_id']."</td>";
				echo"<td>".$c['cat_name']."</td>";
				echo"</tr>";
				}
					
			?>
			</tbody>
			
			</table>
		</div>
		</div><!--row-->
	

  
