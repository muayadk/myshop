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
	
	//دالة اضافة صنف
	
	function addcategory($a)
	{
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
	
}

?>