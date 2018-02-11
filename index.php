   
   <?php

    if(isset($_POST['Student_name']) && isset($_POST['number']) && isset($_POST['email']) 
	&& isset($_POST['parent_name']) && isset($_POST['gen']) && isset($_POST['birth']) && isset($_POST['stand'])&& isset($_POST['our_institute']))
    {
	$name=$_POST['Student_name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$parentName=$_POST['parent_name'];
    $gender=$_POST['gen'];
    $dob=$_POST['birth'];
    $standard=$_POST['stand'];
	$institute=$_POST['our_institute'];
	
	if(!empty($name) && !empty($number) && !empty($email) && !empty($parentName) && !empty($gender) && !empty($dob) && !empty($standard) && !empty($institute))
	{
		$conn=mysqli_connect("localhost","root","","successzone");
		if(!$conn){
			echo'error connecting database';
			exit();
		}
		
		$query="insert into indexdb values('$name','$number','$email', '$parentName', '$gender', '$dob', '$standard', '$institute',)";
		
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