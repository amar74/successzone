<?php

if(isset($_POST['Student_name']) && isset($_POST['number']) && isset($_POST['email']) 
	&& isset($_POST['parent_name']) && isset($_POST['gen']) && isset($_POST['address']) && isset($_POST['stand'])&& isset($_POST['our_institute']) && isset($_POST['comment']))
{
	$name=$_POST['Student_name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$parentName=$_POST['parent_name'];
    $gender=$_POST['gen'];
    $address=$_POST['address'];
    $standard=$_POST['stand'];
	$institute=$_POST['our_institute'];
	$comment=$_POST['comment'];
	
	if(!empty($name) && !empty($number) && !empty($email) && !empty($parentName) && !empty($gender) && !empty($address) && !empty($standard) && !empty($institute) && !empty($comment))
	{
		$conn=mysqli_connect("localhost","root","","successzone");
		if(!$conn){
			echo'error connecting database';
			exit();
		}
		
		$query="insert into contactdb values('$name','$number','$email', '$parentName', '$gender', '$address', '$standard', '$institute', '$comment')";
		
		$run=mysqli_query($conn,$query);
		if($run)
		{
			echo 'data inserted';
		}
		else{
			echo 'data is not inserted';
		}
		
	}
}
?>