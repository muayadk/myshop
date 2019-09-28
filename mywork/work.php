<?php 
 class works
{
	//connection
	public function con()
	{
		$con=mysqli_connect("localhost","root","","myshop") or die("error connection");
		return $con;
	}
	
	// function login in to admin panal
	public function login($a,$b)
	{
		$b=md5($b);
		$q=mysqli_query($this->con()," 
		select * from user WHERE user_name='$a'and password='$b';
		 ") or die("error login");
		 
		 $i=mysqli_num_rows($q);
		 return $i;
	}
	
	// دالة تاتمين من الاختراق 
	function check($n)
	{
		return mysqli_real_escape_string($this->con(),$n);
	}
		
	
	
	//دالة اضافة صنف
	
	function addcategory($a)
	{
		$a=$this->check($a);
		$q=mysqli_query($this->con(), 
		"insert into category (cat_name) values('$a')") 
		or die("error insert in to category");
		
	}
	
	
	// دالة غرض الاصناف 
		function getAllCategory ()
		{
			$q=mysqli_query($this->con() , "select * from category") or die("error retrive category");
			
			return $q;
		}
		
		
		//  دالة ادخال المنتجات
		
		function addproduct($a,$b,$c,$d,$e)
		{
			$a=$this->check($a);
		    $b=$this->check($b);
			$c=$this->check($c);
			$d=$this->check($d);
			$e=$this->check($e);
			
	$q=mysqli_query($this->con(), 
	"insert into product (product_name,product_price,product_details,product_tags,cat_id) values('$a','$b','$c','$d','$e')") or die("Error inserting to table product");
			
			
		}
		
	// دالة لاسترجاع المنتجات	
	function getAllproduct()	
	{
		$q=mysqli_query($this->con() , "select * from product") or die("error retrive product");
			
			return $q;
	}
	
   }  // نهاية الكلاس 

?>