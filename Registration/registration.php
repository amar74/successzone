<?php

   if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['e-mail'])
	   && isset($_POST['phone']) && isset($_POST['paasword']) && isset($_POST['cpaasword'])
       && isset($_POST['gender']))
	   {
    $firstname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$email=$_POST['e-mail'];
	$phone=$_POST['phone'];
    $password=$_POST['paasword'];
    $cpaasword=$_POST['cpaasword'];
    $gender=$_POST['gender'];

	      if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone) 
		     && !empty($password) && !empty($cpaasword) && !empty($gender))
		 
		 {		 
		  		$conn=mysqli_connect("localhost","root","","successzone");
		     if(!$conn){
			echo'error connecting database';
			exit();
			 
			 }
			 $query="insert into registrationdb values('$firstname','$lastname','$email', '$phone', 
			 '$password', '$cpaasword', '$gender',)";
			 
			  $run=mysqli_query($conn,$query);
		if($run)
		{
			echo 'Hey..., Amarnath Your data is successfully inserted';
		}
		else{
			echo 'opsss!!!! Sorry data is not inserted';
		}
	
	
		 }	

	
	}
?>